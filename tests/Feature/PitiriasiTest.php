<?php

use App\Models\Page;

test('Go to the Pitiriasi page', function () {
    $response = $this->get('/Page/Pitiriasi');

    $response->assertStatus(200);
});

// Test to create a page
test('Verify content of a created page', function () {
    $page = Page::factory()->create([
        'title' => "Assessorament Pitiriasi",
        'slug' => "Pitiriasi",
        'subtitle' => "Els teus cabells presenten pitiriasi (Caspa)",
        'description' =>  "El teu diagnòstic indica que estàs experimentant pitiriasis, més coneguda com a caspa. 
        Aquest trastorn del cuir cabellut es caracteritza per l’aparició de flocs blancs o escates, que poden causar picor o irritació. 
        La pitiriasi pot ser causada per diversos factors com l'excés de greix, deshidratació del cuir cabellut o una irritació derivada de fongs. 
        La bona notícia és que la caspa és un problema tractable i es pot millorar amb els tractaments adequats.",
        'content' => "<div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
                    Quines són les causes de la caspa?
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                    <div class='md:w-4/5'>
                        <p class='text-title leading-relaxed'>
                            La caspa pot aparèixer per una sèrie de raons, que inclouen:
                        </p>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li><span class='font-medium'>Excessiva producció de greix:</span> Quan el cuir cabellut
                                segrega massa greixi, les cèl·lules mortes de la pell poden acumular-se i formar
                                escates.</li>
                            <li><span class='font-medium'>Sequedat del cuir cabellut:</span> La deshidratació pot
                                provocar una pell seca i una exfoliació excessiva, donant lloc a la pitiriasi.</li>
                            <li><span class='font-medium'>Estrès i desequilibris hormonals:</span> L’estrès i els canvis
                                hormonals també poden alterar el cuir cabellut i afavorir l'aparició de la caspa.</li>
                            <li><span class='font-medium'>Ús de productes inadequats:</span> L’ús de xampús o altres
                                productes per als cabells que no s’adapten al teu tipus de cuir cabellut pot
                                desencadenar una reacció que produeixi pitiriasi.</li>
                        </ul>
                    </div>
                </div>
            </div>"
    ]);
    
    $response = $this->get("/test-page/{$page->slug}");

    $response->assertInertia(fn ($page) =>
    $page->component('DynamicPage')
         ->where('title', 'Assessorament Pitiriasi')
         ->where('slug', 'Pitiriasi')
         ->where('subtitle', 'Els teus cabells presenten pitiriasi (Caspa)')
         ->where('description', fn($desc) => str_contains($desc, 'El teu diagnòstic indica'))
         ->where('content', fn($content) => str_contains($content, 'Quines són les causes de la caspa?'))
    );
});

// Test to remove page 
test('Delete page', function () {
    $page = Page::factory()->create();

    $page->delete();

    $this->assertDatabaseMissing('pages', [
        'id' => $page->id
    ]);
});