<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Page::create([
            'title' => "Volum",
            'slug' => "Volum",
            'category' => "Cabell",
            'edit' => true,
            'subtitle' => "Els teus cabells necessiten volum",
            'description' => "El teu diagnòstic índica que els teus cabells presenta falta de volum i densitat. Aquest problema pot ser degut a diversos factors, com la textura fina dels cabells, la producció excessiva de sèu que l'aplana o l'ús de productes inadequats.",
            'content' => "<Head title='Volum' />
            <div class='max-w-6xl mx-auto px-4 py-10'>
        <!-- Diagnosis Section -->
        <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
            Per què és important el volum en els cabells?
          </h2>
          <div class='flex flex-col md:flex-row gap-8'>
            <div class='md:w-full'>
              <p class='text-gray-700 leading-relaxed'>
                Un cabell amb volum no només aporta una <b>aparició més densa i saludable,</b>
                sinó que també influeix en l'estil i la forma del pentinat. A més, ajuda a equilibrar
                les faccions del rostre i a millorar l'autoestima.
              </p>
            </div>
          </div>
        </div>
        <!-- Causes Section -->
        <div>
          <div class='max-w-6xl mx-auto py-10'>
            <!-- Diagnosis Section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8 '>
              <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
                Com aconseguir volum?
              </h2>
              <div class='grid grid-cols-1 md:grid-cols-3 gap-6'>
                <!-- Cause 1 -->
                <div class='bg-white rounded-lg shadow-md p-4'>
                  <h3 class='font-semibold text-title mb-2'>1. Higiene capil·lar adequada:</h3>
                  <ul class='list-disc pl-6 mb-4 text-gray-700'>
                    <li class='mb-5 '>Utilitza un <b>xampú volumitzador i lleuger</b> que elimini les impureses sense
                      deixar
                      residus pesants. Evita els xampús amb silicones que poden deixar els cabells enganxosos.</li>
                    <li>Aplica el <b>condicionador només de mitjos a puntes</b> per evitar que el cuir cabellut es vegi
                      pla i sense volum.</li>
                  </ul>
                </div>

                <!-- Cause 2 -->
                <div class='bg-white rounded-lg shadow-md p-4'>
                  <h3 class='font-semibold text-title mb-2'>2. Productes Específics:</h3>
                  <ul class='list-disc pl-6 mb-4 text-gray-700'>
                    <li class='mb-5'><b>Espumes volumitzants o pols texturitzants:</b> Aporten cos i textura sense endurir
                      el cabell. Aplica'ls a les arrels i els mitjos dels cabells per donar cos.</li>
                    <li><b>Esprais d'arrel (root-lifters):</b> Dissenyats per donar volum des de l'arrel sense deixar residus.
                    </li>
                  </ul>
                </div>

                <!-- Cause 3 -->
                <div class='bg-white rounded-lg shadow-md p-4'>
                  <h3 class='font-semibold text-title mb-2'>3. Tècniques de Pentinat:</h3>
                  <ul class='list-disc pl-6 mb-4 text-gray-700'>
                    <li class='mb-5'>Eixuga el cabell amb el cap avall per aixecar les arrels. Utilitza un difusor per
                    aportar volum i definir la forma natural.</li>
                    <li>Assecar amb raspall rodó no metàl·lic: Utilitza un raspall rodó gran per donar forma i volum a les
                    arrels mentre seques el cabell.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Solutions Section -->
          <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
            <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>Consells Professionals Addicionals:</h2>
            <div class='grid grid-cols-1 gap-8'>
              <!-- Left Column -->
              <div>
                <div class='mb-6'>
                  <ul class='list-disc pl-6 mb-4 text-gray-700'>
                    <li><b>Talla i forma dels cabells:</b> Opta per una tallada a capes o degradat per crear moviment i volum natural. Evita els
                    talls rectes que poden fer que el cabell es vegi més pla.</li>
                    <li><b>Evita productes pesants:</b> Com els olis o cremes molt denses, ja que poden aglutinar el
                    cabell fi o sense volum.</li>
                    <li><b>Pentina amb suavitat:</b> Utilitza pintes de pues amples per desenredar sense trencar els
                    cabells i evitar la caiguda innecessària.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Professional Advice -->
          <div class='bg-box p-6 rounded-lg shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg'>
              <h2 class='text-xl font-semibold text-title mb-4 flex items-center gap-2 border-b-2 border-amber-200'>Consulta amb un professional</h2>
            <p class='text-gray-700'>
              Si el teu cabell continua sense volum malgrat seguir aquestes recomanacions, és recomanable fer una visita
              a
              un <b>especialista capil·lar</b> per descartar problemes més greus com alteracions hormonals o
              deficiències
              nutricionals.
            </p>

            <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
              <h3 class='font-semibold text-title mb-2'>Recupera el volum dels teus cabells!</h3>
              <p class='text-gray-700'>
                Amb aquests consells professionals, productes adequats, podràs aconseguir un <b>cabell amb més cos, 
                moviment i vitalitat.</b> Comença avui mateix la teva rutina per potenciar el volum del teu cabell.
              </p>
            </div>
          </div>
      </div>
    </div>",
        ]);
        Page::create([
        'title' => "Encrespament",
        'slug' => "Frizz",
        'category' => "Cabell",
        'edit' => true,
        'subtitle' => "Els teus cabells presenten encrespament (Frizz)",
        'description' => "El teu diagnòstic índica que els teus cabells presenta falta de volum i densitat. Aquest problema pot ser degut a diversos factors, com la textura fina dels cabells, la producció excessiva de sèu que l'aplana o l'ús de productes inadequats.",
        'content' => " <div class='max-w-6xl mx-auto px-4 py-10'>

      <!-- Causes Section -->
      <div class='mb-8'>
        <div class='bg-box rounded-lg shadow-md p-6'>
          <h2 class='text-2xl font-semibold text-title mb-6 pb-3 border-b-2 border-amber-200'>Per què apareix l'encrespament?</h2>
          
          <div class='grid grid-cols-1 md:grid-cols-3 gap-6'>
            <!-- Cause 1 -->
            <div class='bg-white rounded-lg p-4 border border-title/10'>
              <h3 class='font-semibold text-title mb-2'>Humitat ambiental</h3>
              <p class='text-title'>
                L'encrespament es produeix quan el cabell absorbeix la humitat de l'ambient perquè està 
                deshidratat o té la cutícula oberta i porosa.
              </p>
            </div>
            
            <!-- Cause 2 -->
            <div class='bg-white rounded-lg p-4 border border-title/10'>
              <h3 class='font-semibold text-title mb-2'>Danys químics o tèrmics</h3>
              <p class='text-title'>
                Això provoca que els cabells es mostrin amb aspecte encrespat o frizz. La manca de 
                proteïnes i lípids naturals també pot influir en aquest fenomen.
              </p>
            </div>
            
            <!-- Cause 3 -->
            <div class='bg-white rounded-lg p-4 border border-title/10'>
              <h3 class='font-semibold text-title mb-2'>Productes inadequats</h3>
              <p class='text-title'>
                Xampús amb sulfats i productes agressius eliminen els olis naturals i ressequen el cabell,
                contribuint a l'encrespament.
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Solutions Section -->
      <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
        <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>
          Com controlar l'encrespament?
        </h2>
        
        <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
          <!-- Left Column -->
          <div>
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title'>
                Rentat Adequat
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Xampú suau:</span> Utilitza un xampú sense sulfats per evitar l'assecat excessiu.</li>
                <li><span class='font-medium'>Condicionador:</span> Aplica un condicionador anti-encrespament amb olis nutritius (argan, jojoba o karité).</li>
                <li><span class='font-medium'>Temperatura:</span> Renta amb aigua tèbia, mai calenta.</li>
                <li><span class='font-medium'>Freqüència:</span> Evita rentar el cabell diàriament.</li>
              </ul>
            </div>
            
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title'>
                Productes Específics
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Sèrums:</span> Amb silicones lleugeres per crear una barrera protectora contra la humitat.</li>
                <li><span class='font-medium'>Cremes:</span> Cremes definidores de rínxols per a cabells ondulats.</li>
                <li><span class='font-medium'>Olis:</span> Oli capil·lar lleuger d'argan, coco o jojoba.</li>
                <li><span class='font-medium'>Protector tèrmic:</span> Aplica sempre abans de l'ús d'eines de calor.</li>
              </ul>
            </div>
          </div>
          
          <!-- Right Column -->
          <div>
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title'>
                Tècniques de Pentinat
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Assecat:</span> Utilitza tovallola de microfibra per reduir el fregament.</li>
                <li><span class='font-medium'>Temperatura:</span> Eixuga els cabells amb aire fred o tèbia per tancar la cutícula.</li>
                <li><span class='font-medium'>Manipulació:</span> No toquis els cabells un cop sec per evitar encrespament.</li>
                <li><span class='font-medium'>Pentinat:</span> No raspalli els cabells en sec, utilitza pintes de pues amples.</li>
              </ul>
            </div>
            
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title'>
                Remeis Naturals
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Oli de coco o argan:</span> Aplica unes gotes a les puntes per segellar la humitat.</li>
                <li><span class='font-medium'>Vinagre de poma:</span> Diluït per fer un esbandit final i equilibrar el pH.</li>
                <li><span class='font-medium'>Aloe vera:</span> Utilitza el gel com a crema modeladora lleugera per definir els rínxols.</li>
                <li><span class='font-medium'>Mascaretes:</span> Mascaretes casolanes amb ou i mel.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Professional Advice -->
      <div class='bg-box/80 p-6 rounded-lg shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg'>
        <h2 class='text-xl font-semibold text-title mb-4 border-b-2 border-amber-200'>
          Consulta amb un especialista capil·lar
        </h2>
        <p class='text-title'>
          Si l'encrespament persisteix malgrat seguir aquestes recomanacions, pot ser indicatiu de cabell danyat o porós. 
          Un especialista capil·lar podrà analitzar l'estat dels teus cabells i recomanar tractaments professionals adequats.
        </p>
        
        <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
          <h3 class='font-semibold text-title mb-2'>Domina l'encrespament i llueix un cabell suau i definit!</h3>
          <p class='text-title'>
            Amb aquests consells professionals, productes específics i remeis naturals, podràs dir adéu 
            a l'encrespament i gaudir d'un cabell suau, brillant i amb definició. Comença avui mateix la teva rutina anti-frizz!
          </p>
        </div>
      </div>
    </div>"]);

    Page::create([
      'title' => "Visita Especialista Capil·lar",
      'slug' => "Visitspecialist",
      'category' => "Informatiu",
      'edit' => true,
      'subtitle' => "Quan és necessari buscar ajuda professional per als problemes capil·lars",
      'description' => "",
      'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>
      <!-- Introduction Section -->
        <div class='bg-box p-8 rounded-lg shadow-md mb-8 '>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
          Quan és necessari visitar un especialista?
        </h2>
        <div class='gap-8'>
          <p class='text-title leading-relaxed mb-4'>
            Si després de seguir els consells i tractaments indicats per a les teves alteracions capil·lars no observes millores 
            o si els símptomes persisteixen o empitjoren, és important considerar la visita a un dermatòleg o a una clínica especialitzada 
            en tractaments capil·lars.
          </p>
          <p class='text-title leading-relaxed'>
            Els professionals especialitzats podran fer un diagnòstic més precís i proporcionar-te un tractament 
            més avançat i personalitzat per a la teva situació específica.
          </p>
        </div>
        
        <!-- Indicators Section -->
        <div class='mt-8'>
          <h3 class='text-xl font-semibold text-title mb-4 border-l-4 border-box pl-3 underline decoration-box/70 decoration-2 underline-offset-4'>
            Situacions que requereixen visita professional:
          </h3>
          
          <div class='space-y-6'>
            <!-- Indicator 1 -->
            <div class='bg-white p-5 rounded-lg border-l-4 border-box/70 shadow-sm hover:shadow-md transition-all duration-300'>
              <h4 class='font-medium text-title mb-2'>
                <span class='inline-flex items-center justify-center h-6 w-6 rounded-full bg-box/80 text-title mr-2'>1</span>
                Caiguda del cabell persistent o agreujada
              </h4>
              <p class='text-title'>
                Si observes que la caiguda del cabell no millora malgrat els tractaments habituals o si el problema es torna cada vegada més greu, 
                un dermatòleg pot identificar si hi ha una afecció mèdica subjacent, com ara l'alopècia androgenètica, trastorns hormonals, 
                infeccions o altres causes.
              </p>
            </div>
            
            <!-- Indicator 2 -->
            <div class='bg-white p-5 rounded-lg border-l-4 border-box/70 shadow-sm hover:shadow-md transition-all duration-300'>
              <h4 class='font-medium text-title mb-2'>
                <span class='inline-flex items-center justify-center h-6 w-6 rounded-full bg-box/80 text-title mr-2'>2</span>
                Problemes greus al cuir cabellut
              </h4>
              <p class='text-title'>
                Problemes com el cuir cabellut inflamat, cuir cabellut amb ferides, irritacions severes, eczema o dermatitis poden requerir 
                un tractament més específic, que un dermatòleg pot administrar per evitar complicacions a llarg termini.
              </p>
            </div>
            
            <!-- Indicator 3 -->
            <div class='bg-white p-5 rounded-lg border-l-4 border-box/70 shadow-sm hover:shadow-md transition-all duration-300'>
              <h4 class='font-medium text-title mb-2'>
                <span class='inline-flex items-center justify-center h-6 w-6 rounded-full bg-box/80 text-title mr-2'>3</span>
                Tractaments ineficaços per a la caspa o altres alteracions
              </h4>
              <p class='text-title'>
                Si els tractaments per combatre la caspa, el greix excessiu o un cuir cabellut sec i irritat no estan funcionant o els símptomes 
                tornen ràpidament, és possible que el problema sigui més profund del que sembla, i un especialista podrà trobar la causa real.
              </p>
            </div>
            
            <!-- Indicator 4 -->
            <div class='bg-white p-5 rounded-lg border-l-4 border-box/70 shadow-sm hover:shadow-md transition-all duration-300'>
              <h4 class='font-medium text-title mb-2'>
                <span class='inline-flex items-center justify-center h-6 w-6 rounded-full bg-box/80 text-title mr-2'>4</span>
                Deteriorament de la qualitat del cabell
              </h4>
              <p class='text-title'>
                Si el teu cabell és trencadís, perd volum o textura, i el tractament habitual no millora l'aspecte general, una clínica especialitzada 
                pot oferir-te un diagnòstic detallat i tractaments com la teràpia de regeneració capil·lar, microagullament, o mesoteràpia capil·lar 
                per estimular el creixement i la salut del cabell.
              </p>
            </div>
            
            <!-- Indicator 5 -->
            <div class='bg-white p-5 rounded-lg border-l-4 border-box/70 shadow-sm hover:shadow-md transition-all duration-300'>
              <h4 class='font-medium text-title mb-2'>
                <span class='inline-flex items-center justify-center h-6 w-6 rounded-full bg-box/80 text-title mr-2'>5</span>
                Infeccions o paràsits persistents
              </h4>
              <p class='text-title'>
                Si després de diversos tractaments, els polls o les llemnes no desapareixen o causen efectes secundaris com infeccions o irritacions severes, 
                el professional pot determinar el millor tractament mèdic i evitar problemes més greus.
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- How a specialist can help -->
      <div class='bg-box p-8 rounded-lg shadow-md mb-8 '>
        <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
          Com t'ajudarà un especialista?
        </h2>
        
        <div class='grid grid-cols-1 md:grid-cols-3 gap-6'>
          <div class='p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1'>
            <div class='text-title text-xl font-semibold mb-3 text-center underline decoration-box decoration-2 underline-offset-4'>Diagnòstic precís</div>
            <p class='text-title'>
              A través d'una revisió detallada de la teva història clínica, condicions de salut actuals, i l'ús d'eines de diagnòstic com 
              dermatoscopis o proves de sang, podran identificar el problema exacte.
            </p>
          </div>
          
          <div class='p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1'>
            <div class='text-title text-xl font-semibold mb-3 text-center underline decoration-box decoration-2 underline-offset-4'>Tractaments personalitzats</div>
            <p class='text-title'>
              Els tractaments seran adaptats a les teves necessitats específiques, incloent medicaments, teràpies alternatives, o fins i tot 
              procediments quirúrgics com els implants capil·lars.
            </p>
          </div>
          
          <div class='p-6 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1'>
            <div class='text-title text-xl font-semibold mb-3 text-center underline decoration-box decoration-2 underline-offset-4'>Seguiment continu</div>
            <p class='text-title'>
              Els especialistes poden fer un seguiment periòdic per assegurar-se que els tractaments estan tenint èxit i modificar-los 
              si és necessari per obtenir els millors resultats possibles.
            </p>
          </div>
        </div>
        
        <!-- Additional info -->
        <div class='mt-8 border border-dashed border-box p-4 rounded-lg bg-box/20'>
          <div>
            <p class='text-title text-sm mb-4'>
              <span class='font-medium'>Cal tenir en compte:</span> Un especialista capil·lar pot combinar diferents tècniques i tractaments que no estan disponibles 
              en productes convencionals. A més, la tecnologia avançada com l'anàlisi microscòpic del fol·licle pilós o teràpies làser d'última generació 
              només estan disponibles a centres especialitzats.
            </p>
            <p class='text-title text-lg text-center my-4'>
              Recorda que la salut dels teus cabells i cuir cabellut reflecteix el teu benestar general, i buscar ajuda mèdica 
              quan sigui necessari és fonamental per mantenir una bona salut capil·lar.
            </p>
          </div>
        </div>
      </div>
    </div> "]);

    Page::create([
      'title' => "Pell grassa occluïda",
      'slug' => "OccludedOilyskin",
      'category' => "Pell",
      'edit' => true,
      'subtitle' => "",
      'description' => "Pell amb excés de sèu que queda atrapat a la superfície per una barrera obstruïda. Això pot provocar punts negres, acné, inflamació i una textura irregular.",
      'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
    <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
        <!-- Title for content section -->
        <h2 class='text-2xl font-bold text-center mb-6 text-title'>
            Pell Grassa Occluïda
        </h2>

        <!-- Content layout -->
        <div class='flex flex-col md:flex-row gap-8 items-start'>
            <!-- Information tables -->
            <div class='w-full md:w-7/12'>
                <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                    <div class='overflow-x-auto'>

                        <table class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                            <thead class='bg-amber-50'>
                                <tr>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Característiques fisiològiques
                                    </th>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Observació visual
                                    </th>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Observació tàctil
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b border-amber-50 transition-colors'>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>Augmenta la secreció sebacea, pero queda retinguda</li>
                                            <li>Es formen comedons de grassa.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>Pell gruixuda i sensible</li>
                                            <li>Brill opac i palid</li>
                                            <li>Folicles pilosebacis perceptibles.</li>
                                            <li>Quistes o comedons de grassa. Milliums..</li>
                                            <li>Aspecte mate en els laterals del rostre.</li>
                                            <li>Tendeix a presentar moltes taques pigmentaries i vermellors..</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>Tacte acartonat</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                            <thead class='bg-amber-50'>
                                <tr>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Propietats
                                    </th>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Necessitats cutànies
                                    </th>
                                    <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Cures cosmètiques bàsiques
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b border-amber-50 transition-colors'>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>No tolera el sabo ni alguns cosmetics.</li>
                                            <li>La secreció sebacea solidificada forma quistes i comedons.</li>
                                            <li>En els laterals del rostre, la pell tendeix a deshidratar-se.</li>
                                            <li>Tendent a formar grans.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>Eliminar els granuls de grassa occluïda.</li>
                                            <li>Hidratacoó.</li>
                                            <li>Calmar la irritació de la pell.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-2 md:px-4 align-top'>
                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                            <li>Higiene amb aigua i sabó o amb emulsió de pH àcid</li>
                                            <li>Extracció de comedons i milium.</li>
                                            <li>Hidratacio amb cosmetics no oclusius.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Skin image -->
            <div class='self-center mt-8 mx-auto md:mt-0'>
                <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 md:p-6 rounded-lg shadow-md'>
                    <div class='flex justify-center'>
                        <img src='/images/pell_grasa_occ.png' alt='Pell seca alípica'
                            class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>"
  ]);
        Page::create([
            'title' => "Pell Alípica",
            'slug' => "Alipicaskin",
            'category' => "Pell",
            'edit' => true,
            'subtitle' => "",
            'description' => "La pell alipíca és un tipus de pell que es caracteritza per tenir una baixa producció de sèu (greix), fet que la fa més seca i propensa a la deshidratació. Aquest tipus de pell pot ser causada per factors genètics, l'edat, el clima, l'ús de productes inadequats o una alimentació deficient en greixos saludables.",
            'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
          <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
            <!-- Title for content section -->
            <h2 class='text-2xl font-bold text-center mb-6 text-title'>
              Pell Seca Alípica
            </h2>
            
            <!-- Content layout -->
            <div class='flex flex-col md:flex-row gap-8 items-start'>
              <!-- Information tables -->
              <div class='w-full md:w-7/12'>
                  <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                    <div class='overflow-x-auto'>
                      <!-- First table -->
                      <table
                        class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                          <thead class='bg-amber-50'>
                          <tr>
                            <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Característiques fisiològiques</th>
                            <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Observació visual</th>
                            <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Observació tàctil</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr class='border-b border-amber-50 transition-colors'>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Secreció sebàcea insuficient</li>
                              <li>Secreció sudoral normal</li>
                              <li>Emulsió O/A</li>
                              <li>Deshidratació del estrat corni</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                              <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Blanca i sense brill</li>
                              <li>Tendència al envelliment<br>i descamació front els<br>factors externs</li>
                              <li>Arrugues al voltant dels ulls i boca</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Pell fina</li>
                              <li>Resulta aspera i seca</li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                      <thead class='bg-amber-50'>
                        <tr>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Propietats</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Necessitats cutànies</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Cures cosmètiques bàsiques</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class='border-b border-amber-50  transition-colors'>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                              <li>Suporta malament el vent, fred, etc.</li>
                              <li>Tolera malament els sabons, detergents, etc.</li>
                              <li>Sense protecció és deshidratada</li>
                              <li>Tendència a vermellors, irritacions, etc.</li>
                              <li>Broncejat difícil, risc de cremades</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                              <li>Lubricació i correcta hidratació</li>
                              <li>Protecció front a factors externs</li>
                              <li>Prevenció del envelliment cutani</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                              <li>Emulsió netejadora de pH àcid</li>
                              <li>Cremes emol·lients riques en grasses hidrofiles</li>
                              <li>Cosmètics hidratants</li>
                              <li>Protecció solar</li>
                              <li>Evitar sabons, cosmètics desengrasants i alcohol</li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- Skin image -->
              <div class='self-center mt-8 mx-auto md:mt-0'>
                <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 md:p-6 rounded-lg shadow-md'>
                  <div class='flex justify-center'>
                    <img 
                      src='/images/Pell_seca_alípica.png'
                      alt='Pell seca alípica' 
                      class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-title border-[1px]'
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Second Content Section -->
        <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
          <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
            <h2 class='text-2xl font-bold text-center mb-6 text-title'>
              Pell Alípica
            </h2>
            
            <div class='flex flex-col md:flex-row gap-8 items-start'>
              <div class='w-full md:w-7/12'>
                <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                  <div class='overflow-x-auto'>
                    <!-- First table -->
                    
                    <table class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                      <thead class='bg-amber-50'>
                        <tr>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Característiques fisiològiques</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Observació visual</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Observació tàctil</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class='border-b border-amber-50 transition-colors'>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Les glàndules sebàcies<br>produeixen poc greix</li>
                              <li>Generalment la pell<br>és més fina i delicada</li>
                              <li>Té una barrera dèrmica<br>sensible i més susceptible<br>a irritacions i agressions externes</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Aspecte mat i apagat</li>
                              <li>Pell apagada</li>
                              <li>Porus poc visibles</li>
                              <li>Arrugues visibles</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Sensació aspra</li>
                              <li>Poca fermesa i elasticitat</li>
                              <li>Pot sentir-se tibant</li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                      <thead class='bg-amber-50'>
                        <tr>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Propietats</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Necessitats cutànies</th>
                          <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Cures cosmètiques bàsiques</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class='border-b border-amber-50  transition-colors'>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <p class='text-sm'>
                              Sovint associada amb pells<br>utilitzades en tèxtils o artesania,<br>es caracteritza per ser resistent,<br>flexible, suau i duradora.<br>Aquest tipus de pell s'adapta<br>bé a climes freds i humits,<br>mantenint la calor i oferint comoditat.
                            </p>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Hidratació profunda</li>
                              <li>Nutrició</li>
                              <li>Protecció</li>
                              <li>Evitar agents agressius</li>
                              <li>Rutina suau</li>
                              <li>Hàbits saludables</li>
                            </ul>
                          </td>
                          <td class='py-3 px-2 md:px-4 align-top'>
                            <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                              <li>Neteja suau</li>
                              <li>Hidratació</li>
                              <li>Protecció solar</li>
                              <li>Exfoliació suau</li>
                              <li>Màscares hidratants</li>
                            </ul>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- Skin image -->
              <div class='self-center mt-8 mx-auto md:mt-0'>
                <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 md:p-6 rounded-lg shadow-md'>
                  <div class='flex justify-center'>
                    <img 
                      src='/images/Pell_alípica.png' 
                      alt='Pell alípica' 
                      class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-title border-[1px]'
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>",
        ]);

        Page::create([
          'title' => "Nutrició i Hidratació del cabell",
          'slug' => "Nutricio",
          'category' => "Cabell",
          'edit' => true,
          'subtitle' => "Els teus cabells necessiten Hidratació i Nutrició",
          'description' => "El teu diagnòstic indica que els teus cabells mostra signes de deshidratació i manca de
                            nutrients essencials. Això pot ser causat per factors com l'exposició al sol, l'ús d'eines
                            de calor, tractaments químics o simplement per la falta de cures específiques.",
          'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>
            <!-- Causes Section -->
            <div class='mb-8'>
                <div class='bg-box rounded-lg shadow-md p-6'>
                    <h2 class='text-2xl font-semibold text-gray-800 mb-6 border-b-2 border-amber-200'>Per què és
                        important?</h2>
                    <p class='text-gray-700'>
                        Un cabell ben hidratat es veu suau, flexible i amb menys encrespament, mentre que un cabell
                        ben nodrit és fort, brillant i resistent al trencament. La combinació d'hidratació i
                        nutrició és clau per a una melena sana i bonica.
                    </p>
                </div>
            </div>

            <!-- Solutions Section -->
            <div class='bg-box p-6 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <h2 class='text-2xl font-semibold text-gray-800 border-b-2 border-amber-200 pb-2 mb-6'>
                    Com cuidar el teu cabell ara?
                </h2>

                <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
                    <!-- Left Column -->
                    <div>
                        <div class='mb-6'
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Hidratació Profunda
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Xampús i mascaretes hidratants:</span> Utilitza xampús i
                                    mascaretes hidratants amb àcid hialurònic o àloe vera per aportar humitat.
                                    Aplica-les 1-2 vegades per setmana després del condicionador.
                                </li>
                                <li><span class='font-medium'>Sèrums hidratants sense aclarit:</span> Per mantenir la
                                    humitat durant tot el dia amb un producte lleuger que no engreixi.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Nutrició Intensa
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Olis nutritius:</span> Olis nutritius com l'oli d'argan o
                                    coco per segellar la hidratació i proporcionar vitamines i àcids grassos essencials.
                                </li>
                                <li><span class='font-medium'>Xampú i condicionador nutritiu:</span> Tria productes amb
                                    ingredients com la queratina, la biotina o olis naturals per enfortir i donar
                                    brillantor.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='mb-6'>
                        <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                            Consells Addicionals:
                        </h3>
                        <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                            <li><span class='font-medium'>Redueix l'ús de calor:</span> Limita l'ús d'eines com planxes
                                i assecadors per evitar la pèrdua d'humitat.
                            </li>
                            <li><span class='font-medium'>Alimentació equilibrada:</span> Una dieta rica en vitamines A,
                                C i E, així com en àcids grassos omega-3, ajudarà a nodrir el teu cabell des de dins.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Professional Advice -->
            <div
                class='bg-box p-6 rounded-lg shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg'>
                <h2 class='text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2 border-b-2 border-amber-200'>
                    Cuida el teu cabell i llueix una melena sana i radiant!
                </h2>
                <p class='text-gray-700'>
                    Amb aquests consells i productes adequats, el teu cabell recuperarà la seva suavitat, força i
                    brillantor natural. Comença avui mateix la teva rutina d'hidratació i nutrició.
                </p>
            </div>
        </div>",
    ]);

    Page::create([
        'title' => "Assessorament cuir cabellut sensible",
        'slug' => "Cuirsensible",
        'category' => "Cabell",
        'edit' => true,
        'subtitle' => "El teu cuir cabellut és sensible",
        'description' => "El teu diagnòstic indica que el teu cuir cabellut és sensible, una condició que pot provocar
                            irritació, picor, envermelliment o fins i tot descamació. Aquest tipus de cuir cabellut és
                            més propens a reaccionar de manera negativa davant canvis en la temperatura, l'ús de
                            productes inadequats o l'estrès. És important que adoptes una rutina específica per calmar
                            el cuir cabellut i protegir-lo dels factors externs que puguin empitjorar la situació.",
        'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>
            <!-- Causes Section -->
            <div class='mb-8'>
                <div class='bg-box rounded-lg shadow-md p-6'>
                    <h2 class='text-2xl font-semibold text-gray-800 mb-6 border-b-2 border-amber-200'>Quines són les
                        causes del cuir cabellut sensible?
                    </h2>
                    <p class='text-gray-700'>
                        Diversos factors poden contribuir a la sensibilitat del cuir cabellut, com ara:
                    </p>
                    <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                        <li><span class='font-medium'>Productes inadequats:</span> Xampús, condicionadors o tractaments
                            que contenen fragàncies fortes, alcohol o altres substàncies irritants poden provocar una
                            reacció al cuir cabellut.</li>
                        <li><span class='font-medium'>Canvis hormonals:</span> Les fluctuacions hormonals durant
                            l'embaràs, la menstruació o la menopausa poden afectar la sensibilitat del cuir cabellut.
                        </li>
                        <li><span class='font-medium'>Estrès:</span> L'estrès emocional pot afectar el cuir cabellut,
                            causant picor o malestar.</li>
                        <li><span class='font-medium'>Condicions ambientals:</span> Canvis en la temperatura, la
                            humitat, l'ús de calefacció o aire condicionat poden afectar negativament la salut del cuir
                            cabellut.</li>
                        <li><span class='font-medium'>Condicions dermatològiques:</span> Malalties com la dermatitis
                            seborreica o l'èczema poden causar un cuir cabellut sensible.</li>
                    </ul>
                </div>
            </div>

            <!-- Solutions Section -->
            <div class='bg-box p-6 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <h2 class='text-2xl font-semibold text-gray-800 border-b-2 border-amber-200 pb-2 mb-6'>
                    Com tractar el cuir cabellut sensible?</h2>

                <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
                    <!-- Left Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Utilitza productes suaus i específics per a pells sensibles
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li>Opta per xampús sense sulfats, sense fragàncies i sense parabens, dissenyats per
                                    calmar i protegir el cuir cabellut. Busca productes amb ingredients naturals com
                                    l'àloe vera, l'oli d'arbre de te o la camamilla, que tenen propietats calmants i
                                    antiinflamatòries.
                                </li>
                                <li>Evita els xampús amb alcohol i altres substàncies agressives que poden provocar
                                    sequedat o irritació.
                                </li>
                            </ul>
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Millora la teva rutina de rentat dels cabells
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>No rentar els cabells massa sovint:</span> Rentar els
                                    cabells cada dia pot eliminar els olis naturals de protecció del cuir cabellut.
                                    Intenta rentar-lo cada 2 o 3 dies, especialment si tens el cuir cabellut sensible.
                                </li>
                                <li><span class='font-medium'>Aigua tèbia:</span> Evita l'ús d'aigua calenta per rentar
                                    els cabells. L'aigua molt calenta pot irritar el cuir cabellut i ressecar-lo.
                                    Utilitza aigua tèbia o freda per evitar agreujar la sensibilitat.</li>
                            </ul>
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Tractaments calmants
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Mascaretes nutritives:</span> Aplica una mascareta calmant
                                    un cop a la setmana amb ingredients com l'oli d'oliva, la camamilla o l'avellana per
                                    hidratar i alleujar el cuir cabellut.
                                </li>
                                <li><span class='font-medium'>Tòniques refrescants:</span> Utilitzar tòniques amb
                                    ingredients calmants com l'aigua de rosa mosqueta o el xarop de faig pot ajudar a
                                    alleujar la sensació d'irritació i donar-li un descans al cuir cabellut.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Evita la calor excessiva
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Assecar el cabell amb calor:</span> Evita l'ús
                                    d'assecadors a alta temperatura o pals d'ondular calents que poden irritar el cuir
                                    cabellut sensible. Si necessites utilitzar eines d'estil, opta per una calor baix o
                                    mitjà i utilitza sempre un protector tèrmic adequat.
                                </li>
                                <li>Si pots, deixa que els cabells s'eixugui a l'aire per evitar l'estrès tèrmic al cuir
                                    cabellut.
                                </li>
                            </ul>
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Protecció contra factors ambientals
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Evita l'exposició prolongada al sol:</span> El sol intens
                                    pot agreujar la sensibilitat del cuir cabellut. Porta barrets o gorres per protegir
                                    el teu cuir cabellut de l'exposició directa al sol.
                                </li>
                                <li><span class='font-medium'>Condicions de temperatura extremes:</span> Si utilitzes
                                    calefacció o aire condicionat a casa, intenta hidratar i equilibrar la humitat de
                                    l'ambient amb un humidificador per evitar que el cuir cabellut es ressequi.</li>
                            </ul>
                        </div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-gray-700 flex items-center gap-2'>
                                Dieta equilibrada i hidratació
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                                <li><span class='font-medium'>Hidratació interna:</span> Beure molta aigua al llarg del
                                    dia ajuda a mantenir el cuir cabellut hidratat i saludable.
                                </li>
                                <li><span class='font-medium'>Menja aliments rics en omega-3 i vitamines:</span> Els
                                    àcids grassos essencials, presents en aliments com el peix blau, els fruits secs i
                                    les llavors, són ideals per nodrir el cuir cabellut. Les vitamines A, E i B també
                                    són fonamentals per mantenir la salut del cuir cabellut i reduir la irritació.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class='mb-8'>
                <div class='bg-box rounded-lg shadow-md p-6'>
                    <h2 class='text-2xl font-semibold text-gray-800 mb-6 border-b-2 border-amber-200'>Remeis naturals
                        per alleujar el cuir cabellut sensible
                    </h2>
                    <p class='text-gray-700'>
                        Alguns tractaments naturals poden ajudar a alleujar la sensibilitat del cuir cabellut:
                    </p>
                    <ul class='list-disc ml-6 space-y-2 text-gray-700 mt-2'>
                        <li><span class='font-medium'>Àloe Vera:</span> L'àloe vera és un gran calmant natural per a la
                            pell. Aplica gel d’àloe vera fresc directament sobre el cuir cabellut i deixa'l actuar
                            durant uns 10-15 minuts abans de rentar-lo.</li>
                        <li><span class='font-medium'>Oli d'arbre de te:</span> L'oli d'arbre de te té propietats
                            antimicrobianes i calmants. Barreja unes gotes d'oli essencial d'arbre de te amb una base
                            d'oli de coco o oliva i aplica-ho al cuir cabellut per alleujar la irritació i la picor.
                        </li>
                        <li><span class='font-medium'>Infusions de camamilla:</span> La camamilla és coneguda per les
                            seves propietats calmants. Fes-te una infusió i utilitza-la per la última esbandida per
                            alleujar el cuir cabellut sensible.</li>
                    </ul>
                </div>
            </div>

            <!-- Professional Advice -->
            <div
                class='bg-box p-6 rounded-lg shadow-md transition-all mb-8 duration-300 hover:-translate-y-1 hover:shadow-lg'>
                <h2 class='text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2 border-b-2 border-amber-200'>
                    Consulta amb un professional si la irritació persisteix
                </h2>
                <p class='text-gray-700'>
                    Si el teu cuir cabellut segueix irritat, enrogit o inflamat tot i els tractaments, és important que
                    consultis un especialista. Potser hi ha un trastorn dermatològic subjacent com la dermatitis
                    seborreica o l'èczema que requereix tractament mèdic.
                </p>
                <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
                  <h3 class='font-semibold text-title mb-2'>Cuida el teu cuir cabellut per aconseguir uns cabells sans i equilibrats!</h3>
                  <p class='text-gray-700'>
                    Amb una rutina específica i un tractament adequat, podràs alleujar la sensibilitat del teu cuir cabellut i gaudir
                    d'un cabell més saludable, sense irritacions ni molèsties. La clau és ser constant i triar productes suaus i adaptats
                    a les necessitats del teu cuir cabellut.
                  </p>
                </div>
            </div>
        </div>",
    ]);

    Page::create([
      'title' => "Pell grassa",
      'slug' => "Oilyskin",
      'category' => "Pell",
      'edit' => true,
      'subtitle' => "",
      'description' => "Pell grassa normal la emulsió epicutanea es A/O degut a que la secreció sebàcea i
                        subdural son abundants. Cuan s'ha produeix una major quantitat de secreció sebàcea,
                        es pot que la pell es seborreica.",
      'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
                    <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
                        <!-- Title for content section -->
                        <h2 class='text-2xl font-bold text-center mb-6 text-title'>
                            Pell Grassa Normal
                        </h2>

                        <!-- Content layout -->
                        <div class='flex flex-col md:flex-row gap-8 items-start'>
                            <!-- Information tables -->
                            <div class='w-full md:w-7/12'>
                                <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                                    <div class='overflow-x-auto'>
                                        <!-- First table -->
                                        <table
                                            class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                                            <thead class='bg-amber-50'>
                                                <tr>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Característiques fisiològiques</th>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Observació visual</th>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Observació tàctil</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class='border-b border-amber-50  transition-colors'>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>

                                                            <li>Augment de l'activitat de les glàndules sebàcies</li>
                                                            <li>Freqüent a dones i homes de 15-20 anys</li>
                                                            <li>A vegades, per la suor</li>
                                                        </ul>
                                                    </td>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                                                            <li>Pell gruixuda</li>
                                                            <li>Aspectes brillant</li>
                                                            <li>Zona mig facial engronsada i fol·licles pilosebacis perceptibles</li>
                                                            <li>Presenta comedons</li>
                                                        </ul>
                                                    </td>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                                                            <li>Tacte suau i ictus</li>
                                                            <li>Es nota un pleg cutani i gruixut i tacte glandulós</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                                            <thead class='bg-amber-50'>
                                                <tr>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Propietats</th>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Necessitats cutànies</th>
                                                    <th
                                                        class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                        Cures cosmètiques bàsiques</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr
                                                    class='border-b border-amber-50  transition-colors'>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                                            <li>Gran capacitat defensiva</li>
                                                            <li>Resisteix bé el sol i els canvis de temperatures</li>
                                                            <li>Tolera bé els sabons quant es jove</li>
                                                            <li>Envelliment tard</li>
                                                        </ul>
                                                    </td>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                                            <li>Regula la secreció sebàcea</li>
                                                            <li>Prevé les infeccions per la contaminació amb bacteris i factors externs</li>
                                                        </ul>
                                                    </td>
                                                    <td class='py-3 px-2 md:px-4 align-top'>
                                                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                                            <li>Higiene amb sabons i llets que mantinguin el PH àcid</li>
                                                            <li>Lesions antisèptics o astringents suaus</li>
                                                            <li>Cremes i mascaretes astringents</li>
                                                            <li>Emulsions O/A evanescents de baix contingut gras</li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Skin image -->
                            <div class='self-center mt-8 mx-auto md:mt-0'>
                                <div class='bg-gradient-to-b from-white to-[#f8f1ed]  p-4 md:p-6 rounded-lg shadow-md'>
                                    <div class='flex justify-center'>
                                        <img src='/images/Pell_grassa.png' alt='Pell grassa'
                                            class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>",
    ]);
      Page::create([
            'title' => "Assessorament control del greix",
            'slug' => "Greix",
            'category' => "Cabell",
            'edit' => true,
            'subtitle' => "Els teus cabells presenta problemes de greix",
            'description' => "El teu diagnòstic indica que estàs experimentant <b>excés de greix als cabells</b>, un trastorn comú que afecta el cuir cabellut i els fils dels cabells. 
            Quan el cuir cabellut produeix més greix del normal, això pot provocar que els cabelsl es vegi <b>greixós, pesat i sense volum,</b> i fins i tot generar irritació o picor. 
            Afortunadament, hi ha tractaments específics i rutines d'higiene capil·lar que poden ajudar-te a <b>restaurar l'equilibri</b> del teu cuir cabellut.",
            'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>
            <!-- Diagnosis Section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
                    Quines són les causes dels problemes de greix als cabells?
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                    <div class='md:w-full'>
                        <p class='text-title leading-relaxed mb-2'>
                            L'excés de greix als cabells pot ser causat per diversos factors, com ara:
                        </p>
                        <ul class='list-disc pl-6 mb-4 text-title'>
                            <li class='mb-2'><b>Producció excessiva de seu:</b> El cuir cabellut té glàndules sebàcies
                                que produeixen seu per hidratar els cabells. Però quan aquestes glàndules produeixen més
                                greix del necessari, el cabell es torna greixós.</li>
                            <li class='mb-2'><b>Estrès i desequilibris hormonals:</b> Canvis hormonals derivats de
                                l'estrès, l'embaràs o la menopausa poden alterar la producció de greix.</li>
                            <li class='mb-2'><b>Dietes rics en greixos o carbohidrats:</b> Una alimentació rica en
                                greixos saturats o aliments processats pot augmentar la producció de seu, afectant la
                                salut del cuir cabellut.</li>
                            <li class='mb-2'><b>Ús de productes inadequats:</b> Xampús massa agressius o no adequats per
                                al teu tipus de cuir cabellut poden alterar l'equilibri de greix i generar més
                                problemes.</li>
                            <li><b>No rentar el cabell suficientment:</b> Si no rentem els cabells amb la freqüència
                                necessària, l'excés de greix pot acumular-se i causar obstrucció dels fol·licles
                                pilosos.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Causes Section -->
            <div class='mb-8 bg-box p-8 rounded-lg shadow-md'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>Com tractar el greix excessiu als cabells?</h2>
                <div class='grid grid-cols-1 md:grid-cols-1 gap-6'>
                    <!-- Cause 1 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>1. Xampús reguladors de greix:</h3>
                        <p class='text-title leading-relaxed mb-2'>
                            Utilitza xampús formulats específicament per al control del greix, que ajuden a regular la
                            producció de seu sense ressecar els cabells. Alguns ingredients clau a buscar són:
                        </p>
                        <ul class='list-disc pl-6 mb-4 text-title'>
                            <li class='mb-5 '><b>Àcid salicílic:</b> Ajuda a eliminar l'excés de greix i a desobstruir
                                els orificis.</li>
                            <li class='mb-5 '><b>Citrus o extractes vegetals (com el te verd):</b> Aquests ingredients
                                ajuden a equilibrar el cuir cabellut i reduir l'excés de greix.</li>
                            <li><b>Argila blanca o verda:</b> Tenen una gran capacitat per absorbir l'excés de greix i
                                netejar profundament el cuir cabellut.</li>
                        </ul>
                    </div>

                    <!-- Cause 2 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>2. Evitar l’ús excessiu de productes de modelatge:
                        </h3>
                        <p class='text-title leading-relaxed mb-2'>
                            Els <b>gels, esprais o mousses</b> per modelar poden contribuir a l'acumulació de greix, ja
                            que molts d'ells contenen ingredients que poden fer que els cabells sembli més gras. Opta
                            per productes lleugers i sense residus per evitar sobrecarregar els cabells.
                        </p>
                    </div>

                    <!-- Cause 3 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>3. Rentat adequat dels cabells:</h3>
                        <ul class='list-disc pl-6 mb-4 text-title'>
                            <li class='mb-5'><b>No rentar els cabells massa sovint:</b> Tot i que pot semblar que
                                rentar-se els cabells cada dia ajuda, en realitat, pot alterar el cuir cabellut i
                                estimular una producció més gran de greix. <b>Rentat cada 2 o 3 dies</b> pot ser ideal
                                per equilibrar la producció de sèu.</li>
                            <li><b>Aigua tèbia o freda:</b> Evita l'aigua calenta, ja que pot estimular la producció de
                                greix. L'aigua tèbia o freda ajuda a mantenir el cuir cabellut equilibrat.</li>
                        </ul>
                    </div>

                    <!-- Cause 4 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>4. Tractaments específics per al cuir cabellut:</h3>
                        <ul class='list-disc pl-6 mb-4 text-title'>
                            <li class='mb-5'><b>Exfoliació del cuir cabellut:</b> Un cop a la setmana, utilitza un
                                <b>xampú esfoliant o scrub específic per al cuir cabellut</b> per eliminar l'excés de
                                greix acumulat i les impureses.
                            </li>
                            <li><b>Tòniques reguladores:</b> Les tòniques capil·lars poden ser útils per reduir la
                                producció de sèu. Aplicar-les directament sobre el cuir cabellut, especialment a les
                                zones més greixoses, pot ajudar a <b>regulació</b> de la producció de greix.</li>
                        </ul>
                    </div>

                    <!-- Cause 5 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>5. Dieta equilibrada:</h3>
                        <ul class='list-disc pl-6 mb-4 text-title'>
                            <li class='mb-5'><b>Menja de forma equilibrada:</b> Assegura't d'incloure àcids grassos
                                omega-3 (peix, fruits secs), vitamines B i antioxidants (fruites i verdures), i reduir
                                els aliments processats o rics en greixos saturats.</li>
                            <li><b>Beu molta aigua:</b> Una hidratació adequada és fonamental per mantenir el cuir
                                cabellut sa i equilibrat. L'aigua ajuda a regular les glàndules sebàcies i a mantenir
                                els cabells saludables.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Solutions Section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>Remeis naturals per
                    controlar el greix:</h2>

                <div class='grid grid-cols-1 gap-8'>
                    <div>
                        <div class='mb-6'>
                            <p class='text-title leading-relaxed mb-2'>Si prefereixes tractaments naturals, hi ha
                                algunes opcions que poden ajudar-te a equilibrar la producció de greix als cabells:</p>
                            <ul class='list-disc pl-6 mb-4 text-title'>
                                <li><b>Vinagre de poma:</b> Barreja una part de vinagre de poma amb dues parts d’aigua i
                                    aplica-ho al cuir cabellut després del rentat. El vinagre de poma ajuda a
                                    <b>restaurar l'equilibri del pH</b> i redueix l'acumulació de greix.</li>
                                <li><b>Suc de llimona:</b> El suc de llimona ajuda a netejar el cuir cabellut de l’excés
                                    de greix, millorant la brillantor i la frescor dels cabells.</li>
                                <li><b>Te verd:</b> El te verd té propietats antioxidants i pot ajudar a controlar
                                    l'excés de greix, així com reduir la inflamació del cuir cabellut. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Professional Advice -->
            <div
                class='bg-box p-6 rounded-lg shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg'>
                <h2 class='text-xl font-semibold text-title mb-4 flex items-center gap-2 border-b-2 border-amber-200 pb-2'>Consells professionals addicionals:</h2>
                <ul class='text-title'>
                    <li><b>Evita tocar-te els cabells tot el temps:</b> Els nostres dits estan en contacte amb greix i
                        pols, i quan toquem el cabell repetidament, transferim aquestes impureses al cuir cabellut,
                        agreujant els problemes de greix.</li>
                    <li><b>Consulta amb un especialista:</b> Si el problema persisteix o el cuir cabellut s’inflama o es
                        descama, és important que consultis un especialista per determinar si hi ha algun problema
                        subjacent com dermatitis o altres afeccions de la pell.</li>
                </ul>

                <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
                    <h3 class='font-semibold text-title mb-2'>Recupera un cuir cabellut equilibrat i uns cabells nets!
                    </h3>
                    <p class='text-title'>Amb els tractaments adequats i una rutina específica, podràs <b>controlar
                            l'excés de greix</b> als teus cabells i millorar-ne l’aspecte i salut. La constància en la
                        cura del cabell és essencial per aconseguir resultats duradors i veure millores a llarg termini.
                    </p>
                </div>
            </div>
          </div>
      "]);
      Page::Create([
        'title' => "Pell alípica deshidratada",
        'subtitle' => "",
        'slug' => "DehyAlipica",
        'category' => "Pell",
        'edit' => true,
        'description' => "Pell que manca d'aigua i lípids. Sensació de tibantor, descamació i falta 
                          de lluminositat. Es veu apagada, amb línies fines més visibles i textura aspra al tacte.",
        'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
      <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
        <!-- Title for content section -->
        <h2 class='text-2xl font-bold text-center mb-6 text-title'>
          Pell Alípica Deshidratada
        </h2>

        <!-- Content layout -->
        <div class='flex flex-col md:flex-row gap-8 items-start'>
          <!-- Information tables -->
          <div class='w-full md:w-7/12'>
            <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
              <div class='overflow-x-auto'>
                <table class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                  <thead class='bg-amber-50'>
                    <tr>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Característiques fisiològiques</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Observació visual</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Observació tàctil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class='border-b border-amber-50  transition-colors'>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Emulsió O/A.</li>
                          <li>Secreció sebàcea insuficient.</li>
                          <li>Secreció sebàcia amb menor contingut.</li>
                          <li>Menor contingut de greix hidròfil.</li>
                          <li>Forta deshidratació de l'estrat còrni.</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Pell pàl·lida i deteriorada.</li>
                          <li>Pot presentar fractures en zones de major alteració</li>
                          <li>Envelleix prematurament</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Pell aspra amb tacte ressec</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                  <thead class='bg-amber-50'>
                    <tr>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Propietats</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Necessitats cutànies</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Cures
                        cosmètiques bàsiques</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class='border-b border-amber-50  transition-colors'>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                          <li>Tendeix a l'envermelliment i la irratació per factors ambientals.</li>
                          <li>Descama amb facilitat.</li>
                          <li>No tolera bé eks sabons.</li>
                          <li>Tolera el sol de manera moderada.</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-5 text-sm space-y-1'>
                          <li>Hidratació i protecció davant factors externs.</li>
                          <li>Prevenció de l'envelliment.</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-5 text-sm space-y-1'>
                          <li>Emulsió netejadora de pH àcid</li>
                          <li>Cosmètics amb factors naturals d'hidratació i emol·lients amb greixos hidrofils</li>
                          <li>Locions i tòniques senese alcohol</li>
                          <li>Cremes amb protecció solar</li>
                          <li>Evitar l'us de sabons</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Skin image -->
          <div class='self-center mt-8 mx-auto md:mt-0'>
            <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 md:p-6 rounded-lg shadow-md'>
              <div class='flex justify-center'>
                <img src='/images/Dehydrated-aliptic-skin.png' alt='Pell seca alípica'
                  class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      "]);
      Page::Create([
        'title' => "Pell grassa deshidratada",
        'subtitle' => "",
        'category' => "Pell",
        'slug' => "DehyOily",
        'edit' => true,
        'description' => "Pell que presenta excés de producció de sèu però manca d'aigua. Això provoca brillantor excessiva, porus dilatats i tendència a imperfeccions, 
                          alhora que dona sensació de tibantor i possibles descamacions en algunes zones.",
        'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
      <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
        <!-- Title for content section -->
        <h2 class='text-2xl font-bold text-center mb-6 text-title'>
          Pell Grassa Deshidratada
        </h2>

        <!-- Content layout -->
        <div class='flex flex-col md:flex-row gap-8 items-start'>
          <!-- Information tables -->
          <div class='w-full md:w-7/12'>
            <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
              <div class='overflow-x-auto'>
                <table class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                  <thead class='bg-amber-50'>
                    <tr>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Característiques fisiològiques</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Observació visual</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Observació tàctil</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class='border-b border-amber-50 transition-colors'>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Augment de l'activitat glàndules sebàcea.</li>
                          <li>Disminució dels lípids hidrofils</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Aspecte brillant.</li>
                          <li>Fol·licle pilosebaci dilatat principalment en zones mediofacials</li>
                          <li>Descamació en algunes zones</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                          <li>Aspra al tacte.</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                  <thead class='bg-amber-50'>
                    <tr>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Propietats</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                        Necessitats cutànies</th>
                      <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>Cures
                        cosmètiques bàsiques</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class='border-b border-amber-50  transition-colors'>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                          <li>Poc poder defensiu</li>
                          <li>Es descama fàcilment.</li>
                          <li>No tolera bé els sabons ni alguns cosmètics.</li>
                          <li>És sensible als canvis de temperatura</li>
                          <li>Tendència a taques pigmentàries</li>
                          <li>Pell sensible amb tendència a l'envelliment o irritacions</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-5 text-sm space-y-1'>
                          <li>Hidratació.</li>
                          <li>Eliminació de l'excés de greix.</li>
                          <li>Protecció davant factors externs</li>
                          <li>Prevenció d'infeccions.</li>
                          <li>Restabliment del pH normal.</li>
                        </ul>
                      </td>
                      <td class='py-3 px-2 md:px-4 align-top'>
                        <ul class='list-disc pl-5 text-sm space-y-1'>
                          <li>Higiene suau amb emulsions O/A amb pH àcid</li>
                          <li>Locions i tòniques astringents suaus</li>
                          <li>Cremes hidratants efervescents i no oclusives</li>
                          <li>Protecció solar</li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- Skin image -->
          <div class='self-center mt-8 mx-auto md:mt-0'>
            <div class='bg-gradient-to-b from-white to-[#f8f1ed]  p-4 md:p-6 rounded-lg shadow-md'>
              <div class='flex justify-center'>
                <img src='/images/Dehydrated-oily-skin.png' alt='Pell Grassa Deshidratada'
                  class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>"]);
      Page::create([
          'title' => "Assessorament Pitiriasi",
          'slug' => "Pitiriasi",
          'category' => "Cabell",
          'edit' => true,
          'subtitle' => "Els teus cabells presenten pitiriasi (Caspa)",
          'description' =>  "El teu diagnòstic indica que estàs experimentant pitiriasis, més coneguda com a caspa. 
          Aquest trastorn del cuir cabellut es caracteritza per l’aparició de flocs blancs o escates, que poden causar picor o irritació. 
          La pitiriasi pot ser causada per diversos factors com l'excés de greix, deshidratació del cuir cabellut o una irritació derivada de fongs. 
          La bona notícia és que la caspa és un problema tractable i es pot millorar amb els tractaments adequats.",
          'content' => "<div class='max-w-6xl mx-auto px-4 py-12'>
            <!-- Causes -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
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
            </div>

            <!-- Treating dandruff -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>
                    Com tractar la caspa?
                </h2>

                <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
                    <!-- Left Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                                Xampús Anticaspa:
                            </h3>
                            <p class='text-title'>
                                El primer pas per tractar la caspa és utilitzar un xampú específic anticaspa. Busca
                                productes
                                amb ingredients actius com:
                            </p>
                            <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                                <li><span class='font-medium'>Piritiona de zinc:</span> Ajudant a controlar la caspa.
                                </li>
                                <li><span class='font-medium'>Ciclopirox olamina:</span> Té propietats antifúngiques que
                                    poden alleujar la picor i reduir la caspa.</li>
                                <li><span class='font-medium'>Seleni sulfat:</span> Ajudant a controlar la producció de
                                    greix al cuir cabellut.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                                Tractaments de cuir cabellut:
                            </h3>
                            <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                                <li><span class='font-medium'>Exfoliació del cuir cabellut:</span> Els tractaments
                                    exfoliants poden eliminar l'excés de cèl·lules mortes i les impureses acumulades.
                                    Això ajuda a reduir l'acumulació de caspa i millora la salut general del cuir
                                    cabellut.</li>
                                <li><span class='font-medium'>Serums o locions antifúngiques:</span> Els serums
                                    antifúngics poden ajudar a controlar la proliferació de fongs al cuir cabellut,
                                    alleujant la picor i la inflamació.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <div class='mb-6'>
                        <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                            Millorar la hidratació i protecció del cuir cabellut:
                        </h3>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li><span class='font-medium'>Condicionadors hidratants:</span> Després del rentat, utilitza
                                un condicionador hidratant per mantenir el cuir cabellut hidratat i evitar la
                                deshidratació excessiva, que pot agreujar la caspa.</li>
                            <li><span class='font-medium'>Evitar la deshidratació:</span> Beure molta aigua i utilitzar
                                productes humectants ajuden a mantenir el cuir cabellut en bon estat, prevenint la
                                sequedat.</li>
                            <li><span class='font-medium'>Ús de protector tèrmic:</span> Si utilitzes eines de calor,
                                aplica un protector tèrmic per evitar que el cuir cabellut s'irriti i per garantir que
                                el tractament de caspa es mantingui efectiu.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <!-- Treating pityriasis -->
                <h2 class='text-2xl font-semibold text-title mb-6 border-b-2 border-amber-200'>Remeis naturals per tractar la pitiriasi</h2>
                <p class='mb-6 text-title'>Si prefereixes alternatives naturals, aquests remeis poden ajudar a alleujar
                    la pitiriasi:</p>
                <div class='grid grid-cols-1 md:grid-cols-3 gap-6'>
                    <!-- Alternative 1 -->
                    <div class='bg-white rounded-lg shadow-xl p-4'>
                        <h3 class='font-semibold text-title mb-2'>Vinagre de poma:</h3>
                        <p class='text-title'>
                            El vinagre de poma pot restaurar l’equilibri del pH al cuir cabellut i ajudar a eliminar les
                            escates. Barreja una part de vinagre amb dues parts d'aigua i aplica-ho al cuir cabellut
                            abans del rentat.
                        </p>
                    </div>

                    <!-- Alternative 2 -->
                    <div class='bg-white rounded-lg shadow-xl p-4'>
                        <h3 class='font-semibold text-title mb-2'>Aloe vera:</h3>
                        <p class='text-title'>
                            L’aloe vera és un excel·lent aliat per alleujar la picor i la inflamació. Aplica gel d’aloe
                            vera directament al cuir cabellut i deixa’l actuar durant 15-20 minuts abans de rentar-lo.
                        </p>
                    </div>

                    <!-- Alternative 3 -->
                    <div class='bg-white rounded-lg shadow-xl p-4'>
                        <h3 class='font-semibold text-title mb-2'>Oli de l’arbre del te:</h3>
                        <p class='text-title'>
                            L'oli de l'arbre del te té propietats antifúngiques i antibacterianes. Pot ajudar a reduir
                            el creixement del fong i alleujar la irritació del cuir cabellut. Afegeix algunes gotes a tu
                            xampú habitual.
                        </p>
                    </div>
                </div>
            </div>

            <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <!-- Advice -->
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>
                    Consells professionals addicionals:
                </h2>

                <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
                    <!-- Left Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                                Evitar l'estrès:
                            </h3>
                            <p class='text-title'>
                                L'estrès pot contribuir a l'agreujament de la caspa. Fes activitats relaxants com la
                                meditació o l'exercici per ajudar a reduir els seus efectes.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div>
                        <div class='mb-6'>
                            <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                                Consulta amb un especialista:
                            </h3>
                            <p class='text-title'>
                                Si la caspa persisteix o s’acompanya de greus picors, inflamació o lesions al cuir
                                cabellut, és important consultar amb un dermatòleg o especialista capil·lar per a un
                                diagnòstic més detallat.
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class='mb-6'>
                        <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                            Canviar de productes:
                        </h3>
                        <p class='text-title'>
                            Si el teu xampú actual no està donant resultats, pot ser necessari provar diferents opcions
                            per trobar la millor solució per al teu cuir cabellut.
                        </p>
                    </div>
                </div>
                <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
                  <h3 class='font-semibold text-title mb-2'>Recupera un cuir cabellut sa</h3>
                  <p class='text-gray-700'>
                    Seguint aquests consells i tractaments, podràs alleujar la caspa, millorar la salut del
                            teu cuir cabellut i gaudir d’uns cabells més net i saludable. Recorda que la constància és
                            clau, i que un tractament adequat et portarà resultats visibles i duradors.
                  </p>
                </div>
            </div>
        </div>"
        ]);
        Page::create([
          'title' => "Pell mixta",
          'slug' => "MixedSkin",
          'category' => "Pell",
          'edit' => true,
          'subtitle' => "",
          'description' =>  "La pell mixta és una pell que és greixosa en algunes zones (com el nas, el front i la barbeta) i seca o normal en altres (com les galtes). 
          S'ha de cuidar amb productes específics per equilibrar cada zona.",
          'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
    <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
        <!-- Title for content section -->
        <h2 class='text-xl sm:text-2xl font-bold text-center mb-6 text-title'>
            Pell mixta
        </h2>

        <!-- Content layout -->
        <div class='flex flex-col md:flex-row gap-8 items-start justify-between'>
            <!-- Information tables -->
            <div class='md:w-8/12 w-full'>
                <div class='bg-white bg-opacity-80 p-4 rounded-lg shadow-md'>
                    <div class='overflow-x-auto'>
                        <!-- First table -->
                        <table class='w-full border-collapse mb-5 bg-white rounded-lg overflow-hidden'>
                            <thead class='bg-amber-50'>
                                <tr>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Característiques fisiològiques</th>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Observació visual</th>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Observació tàctil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b border-amber-50'>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>A diferents parts del rostre hi ha diferències referents a la secreció.</li>
                                            <li>La zona mediofacial és més greixosa, els laterals són normals o secs.</li>
                                            <li>A la resta del cos també hi ha varacions, normal a la cara i greix.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>Zones de pell greix amb zones seques.</li>
                                            <li>Fol·licles pilosebaces dilatats.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>A les zones de pell normal el tacte és fi.</li>
                                            <li>En zones greixos és ruixuts i untuós.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Second table -->
                        <table class='w-full border-collapse bg-white rounded-lg overflow-hidden mb-2'>
                            <thead class='bg-amber-50'>
                                <tr>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Propietats</th>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Necessitats cutànies</th>
                                    <th class='py-3 px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                        Cures cosmètiques bàsiques</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class='border-b border-amber-50'>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>En l'aplicació de tractaments higienics s'ha de considerar l'existència tant de zones greixoses com de normals o seques.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>Regula la secreció sebàcea.</li>
                                            <li>Prevé les infeccions per la contaminació amb bacteris i factors externs.</li>
                                        </ul>
                                    </td>
                                    <td class='py-3 px-4 align-top'>
                                        <ul class='list-disc pl-4 text-sm space-y-2'>
                                            <li>Els indicis per a cada tipus de pell. Generalment normal i greix.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Skin image -->
            <div class='self-stretch md:w-4/12'>
                <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-3 rounded-lg shadow-md h-full flex items-center'>
                    <img src='/images/PellMixta.png' alt='Pell mixta'
                        class='rounded-lg hover:scale-105 transition-transform duration-300 h-full w-auto object-contain border-[#E8C2B0] border' />
                </div>
            </div>
        </div>
    </div>
</div>",
          
        ]);
        Page::create([
          'title' => "Pell desvitalitzada",
          'slug' => "DesvitalisedSkin",
          'category' => "Pell",
          'edit' => true,
          'subtitle' => "",
          'description' =>  "La pell desvitalitzada és una pell apagada, sense llum, que sembla cansada i seca. Passa per estrès, falta de son, mala alimentació o edat. 
                            Per millorar-la: hidrata, menja bé, dorm suficient i cuida’t amb cremes nutritives. ",
          'content' => "<!-- Content layout with peach background -->
<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
    <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
        <!-- Title for content section -->
        <h2 class='text-2xl font-bold text-center mb-6 text-title'>
            Pell desvitalitzada
        </h2>

        <!-- Content layout -->
        <div class='flex flex-col md:flex-row gap-8 items-start justify-center'>
            <!-- Information tables -->
            <div class='w-full md:w-7/12'>
                <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                    <div class='overflow-x-auto'>
                        <!-- First table -->
                        <div class='overflow-x-auto'>
                            <table class='min-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                                <thead class='bg-amber-50'>
                                    <tr>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Característiques fisiològiques</th>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Observació visual</th>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Observació tàctil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b border-amber-50 transition-colors'>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Renovació cel·lular lenta: Pell apagada i textura irregular.</li>
                                                <li>Mala circulació sanguínia: Menys oxigen i nutrients, to grisenc.</li>
                                                <li>Pèrdua de lípids: Pell deshidratada i fràgil.</li>
                                            </ul>
                                        </td>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Textura aspra: Rugosa i irregular.</li>
                                                <li>Pell fina i fràgil: Menys resistència.</li>
                                                <li>Tibantor, sensació de sequedat.</li>
                                                <li>Baixa elasticitat: Recupera lentament la forma.</li>
                                            </ul>
                                        </td>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Textura aspra: Rugosa i irregular.</li>
                                                <li>Pell fina i fràgil: Menys resistència.</li>
                                                <li>Tibantor: Sensació de sequedat.</li>
                                                <li>Baixa elasticitat: Recupera lentament la forma.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='overflow-x-auto'>
                            <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                                <thead class='bg-amber-50'>
                                    <tr>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Propietats</th>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Necessitats cutànies</th>
                                        <th class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                            Cures cosmètiques bàsiques</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b border-amber-50 transition-colors'>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Beure prou aigua i seguir una dieta rica en fruites i verdures.</li>
                                                <li>Dormir almenys 7-8 hores per nit.</li>
                                                <li>Fer massatges facials per millorar la circulació.</li>
                                                <li>Aplicar mascaretes hidratants i revitalitzants amb ingredients naturals.</li>
                                            </ul>
                                        </td>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Hidratació</li>
                                                <li>Nutrició</li>
                                                <li>Renovació cel·lular</li>
                                                <li>Oxigenació i circulació</li>
                                                <li>Protecció antioxidant</li>
                                                <li>Protecció solar: SPF 30-50 diari</li>
                                            </ul>
                                        </td>
                                        <td class='py-3 px-2 md:px-4 align-top'>
                                            <ul class='list-disc pl-4 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Netejador suau: Amb àcid salicílic.</li>
                                                <li>Tònic: Astringent.</li>
                                                <li>Hidratant: Lleugera i no comedogènica.</li>
                                                <li>Tractaments locals: Peròxid de benzoil, àcid salicílic, niacinamida.</li>
                                                <li>Protector solar: Gel o fluï, no comedogènic.</li>
                                                <li>Maquillatge: No comedogènic i hipoal·lergènic.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skin image -->
            <div class='self-center mt-8 md:mt-0 w-full md:w-auto'>
                <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 md:p-6 rounded-lg shadow-md'>
                    <div class='flex justify-center'>
                        <img src='/images/PellDesvitalitzada.png' alt='Pell grassa'
                            class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>",
        ]);
      Page::create([
            'title' => "Infestació",
            'slug' => "Parasits",
            'category' => "Informatiu",
            'edit' => true,
            'subtitle' => "Tens paràsits al cabell (polls o llémenes)",
            'description' => "Si el teu diagnòstic indica que tens polls o llémenes al cabell, és important actuar de manera ràpida i eficaç per erradicar-los. Els polls són insectes petits que viuen al cuir cabellut i s'alimenten de sang, mentre que les llémenes són els ous dels polls. Aquestes condicions són comunes, especialment en nens, però poden afectar qualsevol persona. La clau per eliminar els paràsits és seguir un tractament adequat i evitar que es propagui.",
            'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>

        <!-- Detection Section -->
        <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
            Com detectar els polls i les llémenes?
          </h2>
          <div class='flex flex-col md:flex-row gap-8'>
            <div class='md:w-4/5'>
              <p class='text-title leading-relaxed'>
                Els polls són insectes de color grisós o marró clar, aproximadament de la mida d'un gra de llavor, i es mouen ràpidament pel cabell. Les llemenes són petites, blanques o transparent, i es fixen a la base del cabell prop del cuir cabellut, sovint a la zona de la nuca i darrere de les orelles.
              </p>
            </div>
          </div>
        </div>

        <!-- Treatment steps section -->
        <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
            Què cal fer si tens polls o llémenes?
          </h2>
          <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8'>
            <!-- Step 1 -->
            <div class='bg-white rounded-lg shadow-md p-6 transform transition hover:scale-105 hover:shadow-lg'>
              <h4 class='text-lg font-semibold mb-3 text-title'>
                1. Utilitza tractaments específics</h4>
              <p class='text-title mb-3'>
                Els tractaments per als polls estan disponibles en farmàcies i inclouen locions, xampús o aerosols que contenen ingredients actius com el permetrina o el dimeticon.
              </p>
              <ul class='list-disc ml-6 text-sm text-title space-y-2'>
                <li>Aplica el producte sobre el cabell sec (segons les instruccions) i deixa'l actuar durant el temps recomanat.</li>
                <li>Després de la higiene dels cabells, utilitza una pinta de llémenes per retirar els ous i els polls morts.</li>
              </ul>
            </div>
            
            <!-- Step 2 -->
            <div class='bg-white rounded-lg shadow-md p-6 transform transition hover:scale-105 hover:shadow-lg'>
              <h4 class='text-lg font-semibold mb-3 text-title'>2. Repeteix el tractament</h4>
              <p class='text-title mb-3'>
                És important repetir el tractament després de 7-10 dies per assegurar-se que tots els polls i llémenes han estat eliminats.
              </p>
              <ul class='list-disc ml-6 text-sm text-title space-y-2'>
                <li>El tractament de repetició ajuda a eliminar qualsevol poll que hagi sorgit dels ous que no s'havien eliminat la primera vegada.</li>
              </ul>
          </div>
          <!-- Step 3 -->
          <div class='bg-white rounded-lg shadow-md p-6 transform transition hover:scale-105 hover:shadow-lg'>
            <h4 class='text-lg font-semibold mb-3 text-title'>3. Utilitza un raspall de llémenes</h4>
              <p class='text-title mb-3'>
                Un raspall de llémenes té dents fines que ajuden a retirar els ous fixats a les fibres del cabell.
              </p>
              <ul class='list-disc ml-6 text-sm text-title space-y-2'>
                <li>Raspalla el cabell minuciosament quan està humit per evitar que els polls es moguin ràpidament.</li>
                <li>La paciència és fonamental. Les llémenes estan molt adherides i pot ser necessari passar el raspall més d'una vegada.</li>
            </ul>
          </div>
          <!-- Step 4 -->
          <div class='bg-white rounded-lg shadow-md p-6 transform transition hover:scale-105 hover:shadow-lg'>
            <h4 class='text-lg font-semibold mb-3 text-title'>4. Renta tot el que estigui en contacte amb el cabell infectat</h4>
            <p class='text-title mb-3'>
              Els polls poden viure en llençols, tovalloles, pinzells i altres accessoris que estiguin en contacte directe amb el cabell.
            </p>
            <ul class='list-disc ml-6 text-sm text-title space-y-2'>
              <li>Per evitar la propagació de la infestació, renta tot el material possible a alta temperatura (més de 60 graus Celsius) per eliminar qualsevol poll o llémena.</li>
              <li>Els objectes que no es poden rentar, posa'ls en una bossa tancada durant 48 hores.</li>
            </ul>
          </div>
          
          <!-- Step 5 -->
          <div class='bg-white rounded-lg shadow-md p-6 transform transition hover:scale-105 hover:shadow-lg'>
            <h4 class='text-lg font-semibold mb-3 text-title'>5. Evita el contacte proper fins eliminar els polls</h4>
            <p class='text-title mb-3'>
                Els polls es transmeten per contacte directe entre persones, especialment a través de les persones que tenen el cabell llarg.
              </p>
              <ul class='list-disc ml-6 text-sm text-title space-y-2'>
                <li>Per evitar que la infestació s’estengui, intenta evitar el contacte proper amb altres persones fins que hagis completat el tractament i eliminat tots els polls.</li>
                <li>Tracta també qualsevol altre membre de la família que pugui estar infectat.</li>
              </ul>
          </div>
        </div>
      </div>
        <!-- Additional recommendations section -->
        <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
              Recomanacions addicionals
          </h2>
          <div class='flex flex-col gap-8'>
            <div class='md:w-full'>
              <p class='text-title leading-relaxed mb-4'>Segueix aquestes recomanacions per prevenir i tractar eficaçment els polls:</p>
              <div class='grid md:grid-cols-3 gap-4'>
                <div class='bg-white rounded-lg p-4 shadow-sm border border-amber-100'>
                  <h5 class='font-semibold text-title mb-2'>Higiene personal</h5>
                  <p class='text-sm text-title'>Rentar el cabell regularment amb un xampú suau pot ajudar a mantenir-lo net, però els xampús contra polls són els més adequats per a aquesta situació.</p>
                </div>
                <div class='bg-white rounded-lg p-4 shadow-sm border border-amber-100'>
                  <h5 class='font-semibold text-title mb-2'>Fes un seguiment</h5>
                  <p class='text-sm text-title'>Si després de diversos tractaments els polls persisteixen, consulta amb un professional per rebre més consells o una revisió del tractament.</p>
                </div>
                <div class='bg-white rounded-lg p-4 shadow-sm border border-amber-100'>
                  <h5 class='font-semibold text-title mb-2'>Preveniu futures infestacions</h5>
                  <p class='text-sm text-title'>Un cop eliminats els polls, cal ser vigilant i prevenir possibles reinfeccions. És recomanable fer una revisió periòdica dels cabells dels més petits de la casa, especialment si han estat en contacte amb altres nens que podrien estar infestats.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Professional advice section -->
        <div class='bg-box p-6 rounded-lg shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-lg'>
        <h2 class='text-xl font-semibold text-title mb-4 flex items-center gap-2 border-b-2 border-amber-200'>
            Consulta amb un professional si els símptomes persisteixen:
          </h2>
          <div class='md:flex-row gap-8'>
            <p class='text-title leading-relaxed'>
              Si després de diversos tractaments els polls no desapareixen o si tens dubtes sobre el tractament adequat, és important consultar un dermatòleg o un especialista en salut capil·lar. També et poden orientar sobre tractaments mèdics més específics si tens una infestació persistent o complicacions addicionals.
            </p>
            <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
              <h3 class='font-semibold text-title mb-2'>Recorda:</h3>
              <p class='text-gray-700'>
                El tractament de la infestació per polls pot requerir temps i paciència. Sigues constant amb el procés i evita la propagació per mantenir un cuir cabellut i cabells saludable.
              </p>
            </div>
          </div>
        </div>
      </div>"
        ]);

        Page::create([
          'title' => "Acne",
          'slug' => "acne",
          'category' => "Pell",
          'edit' => true,
          'subtitle' => "",
          'description' => "Pell que presenta una inflamació crònica caracteritzada per barbs, punts negres, quists o pústules a causa d'una producció excessiva de sèu, obstrucció dels porus i proliferació bacteriana. Afecta a diferents tipus de pell i sovint va acompanyada de sensibilitat i vermellors.",
          'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-10'>
  <div class='bg-box rounded-lg p-4 sm:p-8 shadow-lg'>
    <!-- Title for content section -->
    <h2 class='text-xl sm:text-2xl font-bold text-center mb-4 sm:mb-6 text-title'>
      Pell amb Acne
    </h2>
    
    <!-- Content layout - Misma estructura pero responsive -->
    <div class='flex flex-col md:flex-row gap-6 sm:gap-8 items-start'>
      <!-- Information tables - mismo orden pero con scroll horizontal en móvil -->
      <div class='w-full md:w-7/12'>
        <div class='bg-white bg-opacity-80 p-4 sm:p-6 rounded-lg shadow-md'>
          <!-- Contenedor de tablas con scroll horizontal solo en móvil -->
          <div class='overflow-x-auto md:overflow-visible'>
            <!-- Primera tabla - misma estructura -->
            <table class='min-w-[600px] md:w-full border-collapse mb-6 sm:mb-8 bg-white rounded-lg overflow-hidden'>
              <thead class='bg-amber-50'>
                <tr>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Característiques fisiològiques</th>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Observació visual</th>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Observació tàctil</th>
                </tr>
              </thead>
              <tbody>
                <tr class='border-b border-amber-50 transition-colors'>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li>Hiperactivitat de glàndules sebàcies.</li>
                      <li>Obstrucció de porus.</li>
                      <li>Inflamació (<i>Cutibacterium acnes</i>).</li>
                      <li>Relació amb canvis hormonals.</li>
                    </ul>
                  </td>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li>Punts negres, blancs, pàpules i pústules.</li>
                      <li>Brillantor i textura desigual.</li>
                      <li>Marques o cicatrius en casos greus.</li>
                    </ul>
                  </td>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li>Rugositat per lesions i cicatrius.</li>
                      <li>Zones greixoses, especialment a la zona T.</li>
                      <li>Sensibilitat o dolor en zones inflamades.</li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
            
            <!-- Segunda tabla - misma estructura -->
            <table class='min-w-[600px] md:w-full border-collapse bg-white rounded-lg overflow-hidden'>
              <thead class='bg-amber-50'>
                <tr>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Propietats</th>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Necessitats cutànies</th>
                  <th class='py-2 sm:py-3 px-3 sm:px-4 text-left text-xs sm:text-sm font-bold text-title border-b-2 border-amber-100'>Cures cosmètiques bàsiques</th>
                </tr>
              </thead>
              <tbody>
                <tr class='border-b border-amber-50 transition-colors'>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li>Seborrea (excés de sèu).</li>
                      <li>Propensió a la inflamació i obstrucció dels porus.</li>
                      <li>Alteració de la flora cutània.</li>
                    </ul>
                  </td>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li>Neteja profunda (2 cops al dia).</li>
                      <li>Regulació del sèu.</li>
                      <li>Hidratació adequada (<i>oil-free</i>).</li>
                      <li>Exfoliació suau amb AHA o BHA.</li>
                      <li>Protecció solar diària.</li>
                    </ul>
                  </td>
                  <td class='py-2 sm:py-3 px-3 sm:px-4 align-top'>
                    <ul class='list-disc pl-4 sm:pl-5 text-xs sm:text-sm space-y-1'>
                      <li><span class='font-medium text-title'>Netejador suau:</span> Amb àcid salicílic.</li>
                      <li><span class='font-medium text-title'>Tònic:</span> Astringent.</li>
                      <li><span class='font-medium text-title'>Hidratant:</span> Lleugera i no comedogènica.</li>
                      <li><span class='font-medium text-title'>Tractaments locals:</span> Peròxid de benzoil, àcid salicílic, niacinamida.</li>
                      <li><span class='font-medium text-title'>Protector solar:</span> Gel o fluït, no comedogènic.</li>
                      <li><span class='font-medium text-title'>Maquillatge:</span> No comedogènic i hipoal·lergènic.</li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <!-- Imagen - misma posición pero con ajustes responsive -->
      <div class='w-full md:w-5/12 self-center mt-0 md:mt-0 mx-auto'>
        <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 sm:p-6 rounded-lg shadow-md'>
          <div class='flex justify-center'>
            <img 
                src='/images/acne.png' 
                alt='Acne skin condition' 
                class='rounded-lg hover:scale-105 transition-transform duration-300 object-contain border border-[#E8C2B0] max-h-[300px] sm:max-h-[400px]'
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>"
        ]);

        Page::create([
          'title' => "",
          'slug' => "hairQuestionnaire",
          'category' => "Questionari",
          'edit' => false,
          'subtitle' => "",
          'description' => "",
          'content' => "<!-- Hero Image Section -->
        <div class='w-full bg-page pt-36 pb-10'>
            <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'>
                <!-- Imagen principal -->
                <div class='relative flex justify-center mb-12'>
                    <img 
                        src='/images/questionnaricapil·lar.png' 
                        alt='Avaluació capil·lar' 
                        class='rounded-lg shadow-lg w-full object-cover h-96'
                    />
                    <div class='absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg'>
                        <h2 class='text-white text-4xl font-bold'>Diagnòstic Capil·lar</h2>
                    </div>
                </div>
                
                <!-- Main Content -->
                <div class='bg-box rounded-lg p-8 shadow-lg max-w-5xl mx-auto'>
                    <h1 class='text-3xl font-bold text-center text-title mb-8 font-garamond'>
                        Descobreix el secret per a un cabell sa i radiant!
                    </h1>
                    
                    <div class='space-y-6 text-title font-garamond'>
                        <p class='leading-relaxed text-xl'>
                            El cabell ben cuidat no només millora la teva imatge, sinó que també reflecteix salut i confiança.
                        </p>
                        <p class='leading-relaxed text-xl'>
                            Respon el nostre <strong class='font-bold'>qüestionari capil·lar online</strong> i obtén un <strong class='font-bold'>assessorament personalitzat</strong> en pocs minuts. 
                            Identifica les necessitats del teu cabell i rep recomanacions específiques per cuidar-lo com es mereix.
                        </p>
                        
                        <p class='leading-relaxed text-xl'>
                            <strong class='font-bold'>Un cabell saludable és clau per sentir-te bé amb tu mateix.</strong> No esperis més per lluir un cabell espectacular!
                        </p>
                    </div>
                    
                    <!-- Call to Action Button -->
                    <div class='mt-10 flex justify-center'>
                        <a 
                            href='/questionari-cabell' 
                            class='bg-gradient-to-r from-amber-700 to-amber-900 text-white font-bold text-lg py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg font-garamond w-full md:w-auto md:max-w-md text-center'
                        >
                            QÜESTIONARI CAPIL·LAR
                        </a>
                    </div>
                </div>
            </div>
        </div>"
  ]);

  Page::create([
    'title' => "Reparació capil·lar",
    'slug' => "repair",
    'category' => "Cabell",
    'edit' => true,
    'subtitle' => "Els teus cabells necessiten Reparar la Fibra Capil·lar",
    'description' => "El teu diagnòstic indica que els teus cabells presenta símptomes de dany a la fibra capil·lar. Això pot ser resultat de l'exposició a tractaments químics, l'ús freqüent d'eines de calor, la manca d'hidratació o fins i tot una nutrició inadequada. Quan la fibra capil·lar es deteriora, el cabell es torna fràgil, 
    trencadís i sense brillantor. Però amb els tractaments adequats, és possible restaurar la salut dels cabells i millorar-ne l'elasticitat i força.",
    'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>

            <!-- Why important section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title mb-4 flex items-center gap-2 border-b-2 border-amber-200 pb-2'>
                    Per què és important reparar la fibra capil·lar?
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                    <div class='md:w-4/5'>
                        <p class='text-title leading-relaxed'>
                            La fibra capil·lar és l'estructura interna dels cabells, composta per proteïnes com la queratina. Quan aquesta es danya, els cabells es torna més vulnerable a la trencada, la deshidratació i la falta de brillantor. La reparació de la fibra capil·lar és essencial per tornar a aconseguir uns cabells forts, flexibles i saludables.
                        </p>
                    </div>
                </div>
            </div>

            <!-- How to repair section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
                <h2 class='text-2xl font-semibold text-title mb-4 gap-2 border-b-2 border-amber-200 pb-2'>
                    Com reparar la fibra capil·lar?
                </h2>
                
                <div class='grid grid-cols-1 md:grid-cols-3 gap-6 mb-8'>
                    <!-- Card 1 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>Higiene capil·lar i Cura Adequada</h3>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li>Utilitza un xampú reparador amb proteïnes de queratina o ceramides que restaurin l'estructura de la fibra capil·lar.</li>
                            <li>Aplica un condicionador nutritiu i reparador després del xampú, amb ingredients com la proteïna de seda, que ajuda a reconstruir la fibra danyada.</li>
                        </ul>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>Tractaments Profunds</h3>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li>Mascaretes capil·lars nutritives i reparadores: Busca productes amb oli d'argan, mantega de karité o col·lagen per restaurar la hidratació i regenerar la fibra. Apliques-les 1-2 vegades per setmana i deixa-les actuar entre 10 i 20 minuts.</li>
                            <li>Tractaments de queratina: Aquest tractament professional, realitzat a la perruqueria, pot reparar profundament la fibra capil·lar, restaurant la seva força i suavitat.</li>
                        </ul>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class='bg-white rounded-lg shadow-md p-4'>
                        <h3 class='font-semibold text-title mb-2'>Protecció de la Fibra</h3>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li>Serums reparadors: Utilitza serums lleugers amb protecció tèrmica per evitar que el cabell es danyi més amb l'ús de planxes o assecadors.</li>
                            <li>Evita l'ús excessiu d'eines de calor com planxes, assecadors o rizadors. Si és necessari, sempre aplica un protector tèrmic abans de l'ús d'aquestes eines.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Natural remedies section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
                    Remeis Naturals per Reparar la Fibra Capil·lar
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                    <div class='md:w-4/5'>
                        <p class='text-gray-700 leading-relaxed'>Si prefereixes alternatives naturals, aquests remeis poden ajudar a restaurar la força dels teus cabells:</p>
                        <div class='grid grid-cols-1 md:grid-cols-3 gap-4 mt-4'>
                            <!-- Natural remedy 1 -->
                            <div class='bg-white rounded-lg p-4 border border-amber-100'>
                                <h5 class='font-semibold text-title mb-2'>Oli de coco</h5>
                                <p class='text-title'>Ric en àcids grassos i vitamina E. Aplica'l com a tractament pre-rentat i deixa'l actuar durant 30 minuts.</p>
                            </div>
                            
                            <!-- Natural remedy 2 -->
                            <div class='bg-white rounded-lg p-4 border border-amber-100'>
                                <h5 class='font-semibold text-title mb-2'>Avocat i mel</h5>
                                <p class='text-title'>Fes una barreja d'avocat triturat amb mel. L'avocat aportarà vitamines i la mel hidratarà la fibra capil·lar.</p>
                            </div>
                            
                            <!-- Natural remedy 3 -->
                            <div class='bg-white rounded-lg p-4 border border-amber-100'>
                                <h5 class='font-semibold text-title mb-2'>Iogurt i oli d'oliva</h5>
                                <p class='text-title'>El iogurt és ric en proteïnes i l'oli d'oliva és un excel·lent hidratant. Aporta força i suavitat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Professional advice section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
                    Consells Professionals Addicionals
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                    <div class='md:w-4/5'>
                        <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                            <li><span class='font-medium'>Talls regulars:</span> Mantingues els cabells despuntat cada 6-8 setmanes per eliminar les puntes obertes.</li>
                            <li><span class='font-medium'>Reduir l'estrès químic:</span> Deixa que els cabells descansin i es recuperin abans d'aplicar més químics.</li>
                            <li><span class='font-medium'>Hidratació contínua:</span> Beu molta aigua i utilitza productes hidratants de manera regular.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Specialist consultation section -->
            <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
                <h2 class='text-2xl font-semibold text-title gap-2 mb-4 border-b-2 border-amber-200 pb-2'>
                    Consulta amb un especialista capil·lar
                </h2>
                <div class='flex flex-col md:flex-row gap-8'>
                  <p class='text-title leading-relaxed'>
                      Si la reparació de la fibra capil·lar no mostra resultats malgrat aquests tractaments, és recomanable consultar amb un especialista capil·lar. Un professional pot diagnosticar el dany més profund i recomanar tractaments personalitzats, com tècniques de regeneració avançada o teràpies nutritives intensives.
                  </p>
                </div>
                <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
                  <h3 class='font-semibold text-title mb-2'>Recupera la força i salut dels teus cabells!</h3>
                  <p class='text-gray-700'>
                    Amb aquests consells professionals, productes específics i remeis naturals, els teus cabells començarà a recuperar força, brillantor i resistència.
                    Comença ara la teva rutina de reparació de la fibra capil·lar per aconseguir uns cabells més saludable i resistent!
                  </p>
                </div>
            </div>
        </div>"
        ]);

        Page::create([
          'title' => "Pell Sensible",
          'slug' => "sensitiveskin",
          'category' => "Pell",
          'edit' => true,
          'subtitle' => "",
          'description' => "La pell sensible és com tenir una pell 'delicada' que s'irrita o es posa vermella fàcilment amb coses normals, com sabons forts, el sol o el fred. Això passa perquè no té una bona 'barrera protectora'. Per cuidar-la: fes servir productes suaus, sense olors fortes, posa't crema hidratant i protector solar. Si continua fent-te mal, consulta un dermatòleg.",
          'content' => "<div class='max-w-6xl mx-auto px-2 py-6 md:py-10'>
    <!-- Content layout with peach background -->
    <div class='max-w-7xl mx-auto mb-8 md:mb-16'>
        <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
            <!-- Title for content section -->
            <h2 class='text-xl sm:text-2xl font-bold text-center mb-4 sm:mb-6 text-title'>
                Pell Sensible
            </h2>
            
            <!-- Content layout -->
            <div class='flex flex-col md:flex-row gap-6 items-start'>
                <!-- Information tables -->
                <div class='w-full md:w-7/12'>
                    <div class='bg-white bg-opacity-80 p-3 md:p-6 rounded-lg shadow-md'>
                        <!-- Each table in its own scrollable container -->
                        <!-- First table -->
                        <div class='overflow-x-auto mb-6 pb-2'>
                            <table class='w-full border-collapse bg-white rounded-lg min-w-[680px]'>
                                <thead class='bg-amber-50'>
                                    <tr>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Característiques fisiològiques</th>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Observació visual</th>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Observació tàctil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b border-amber-50'>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Barrera cutània debilitada.</li>
                                                <li>Reacció exagerada a estímuls externs.</li>
                                                <li>Tendència a l'envermelliment i sensació de cremor.</li>
                                            </ul>
                                        </td>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Envermelliment freqüent, especialment en galtes i nas.</li>
                                                <li>Pell fina i amb tendència a la descamació.</li>
                                                <li>Possibles gots capil·lars dilatats (cuperosi).</li>
                                            </ul>
                                        </td>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Sensació de tirantor.</li>
                                                <li>Àrees seques i rugoses.</li>
                                                <li>Pot reaccionar amb ardor o coïssor al contacte amb certs productes.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Second table -->
                        <div class='overflow-x-auto pb-2'>
                            <table class='w-full border-collapse bg-white rounded-lg min-w-[680px]'>
                                <thead class='bg-amber-50'>
                                    <tr>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Propietats</th>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Necessitats cutànies</th>
                                        <th class='py-2 px-2 md:py-3 md:px-4 text-left text-xs md:text-sm font-bold text-title border-b-2 border-amber-100 w-1/3'>Cures cosmètiques bàsiques</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='border-b border-amber-50'>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Major vulnerabilitat a agressors ambientals.</li>
                                                <li>Resposta inflamatòria més intensa del normal.</li>
                                                <li>Necessitat de productes suaus i calmants.</li>
                                            </ul>
                                        </td>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li>Hidratació profunda amb ingredients calmants.</li>
                                                <li>Protecció solar obligatòria (SPF alt).</li>
                                                <li>Evitar productes amb alcohol, fragàncies i àcids forts.</li>
                                                <li>Enfortiment de la barrera cutània amb ceramides i lípids.</li>
                                            </ul>
                                        </td>
                                        <td class='py-2 px-2 md:py-3 md:px-4 align-top'>
                                            <ul class='list-disc pl-3 md:pl-5 text-xs md:text-sm space-y-1'>
                                                <li><span class='font-medium text-title'>Neteja:</span> Usar netejadors suaus sense sulfats ni alcohol.</li>
                                                <li><span class='font-medium text-title'>Hidratació:</span> Amb àcid hialurònic, pantenol i ceramides.</li>
                                                <li><span class='font-medium text-title'>Tractaments:</span> Productes amb niacinamida, civada col·loïdal i centella asiàtica.</li>
                                                <li><span class='font-medium text-title'>Protecció solar:</span> Mineral amb filtres físics, sense perfums.</li>
                                                <li><span class='font-medium text-title'>Maquillatge:</span> Hipoal·lergènic, sense fragàncies ni conservants.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Sensitive skin image -->
                <div class='self-center mt-4 md:mt-0 w-full md:w-5/12 mx-auto'>
                    <div class='bg-gradient-to-b from-white to-[#f8f1ed] p-4 rounded-lg shadow-md'>
                        <div class='flex justify-center'>
                            <img src='/images/sensitive-skin.png' alt='Sensitive skin condition'
                                class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[350px] md:max-h-[450px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>"
        ]);

        Page::create([
            'title' => "",
            'slug' => "skinQuestionnaire",
            'category' => "Questionari",
            'edit' => false,
            'subtitle' => "",
            'description' => "",
            'content' => "<!-- Hero Image Section -->
        <div class='w-full bg-page pt-36 pb-10'>
            <div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'>
                <!-- Imagen principal -->
                <div class='relative flex justify-center mb-12'>
                    <img 
                        src='/images/questionaripell.png' 
                        alt='Avaluació de la pell'
                        class='rounded-lg shadow-lg w-full object-cover h-96'
                    />
                    <div class='absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center rounded-lg'>
                        <h2 class='text-white text-4xl font-bold'>Diagnòstic de la pell</h2>
                    </div>
                </div>
                
                <!-- Primera sección: Solo imagen con borde redondeado -->
                <div class='flex justify-center mb-8'>
                    <img 
                        src='/images/questionaripell1.png' 
                        alt='Productes per a la cura de la pell' 
                    />
                </div>
                
                <!-- Box separado para texto en negrita -->
                <div class='bg-box rounded-lg p-8 shadow-lg mb-8'>
                    <p class='leading-relaxed text-xl text-title font-garamond font-bold'>
                        Els productes que es facin servir en aquestes rutines han de ser de qualitat i, sobretot, s'han d'adaptar al tipus de pell específic de cada persona. Es recomana aplicar aquestes cremes després de la rentada, amb la pell humida, perquè s'absorbeix més i millor. Per a una bona hidratació, tonificació i exfoliació, és convenient emprar els productes recomanats pel dermatòleg, per tenir una cura eficient. Tots aquests productes contribuiran a protegir la pell davant d'agressions externes com poden ser el sol o la contaminació i, també, calmaran la pell irritada, restabliran el seu estat i eviten l'aparició de malalties cutànies.
                    </p>
                </div>
                
                <!-- Segunda sección: Solo imagen con borde redondeado -->
                <div class='flex justify-center mb-8'>
                    <img 
                        src='/images/questionaripell2.png' 
                        alt='Avaluació del tipus de pell' 
                    />
                </div>
                
                <!-- Box separado para título y texto explicativo -->
                <div class='bg-box rounded-lg p-8 shadow-lg mb-8'>
                    <!-- Título -->
                    <h2 class='text-3xl font-bold text-center text-title mb-6 font-garamond'>
                        5 MINUTS I PODRÀS SABER QUIN TIPUS DE PELL TENS!
                    </h2>
                    
                    <!-- Texto explicativo -->
                    <p class='leading-relaxed text-xl text-title font-garamond'>
                        Amb aquestes preguntes podràs descobrir quin tipus de pell tens i com cuidar-la de la millor manera. Conèixer les necessitats específiques de la teva pell t'ajudarà a mantenir-la sana, equilibrada i radiant.
                    </p>
                
                    <div class='mt-10 flex justify-center'>
                        <a 
                            href='/questionari-pell' 
                            class='bg-gradient-to-r from-amber-700 to-amber-900 text-white font-bold text-lg py-4 px-10 rounded-full transition duration-300 transform hover:scale-105 hover:shadow-xl shadow-lg font-garamond w-full md:w-auto md:max-w-md text-center'
                        >
                            QÜESTIONARI DE LA PELL
                        </a>
                    </div>
                </div>
            </div>
        </div>",
          ]);

          Page::create([
            'title' => "Caiguda dels Cabells",
            'slug' => "Caigudacabell",
            'category' => "Cabell",
            'edit' => true,
            'subtitle' => "Els teus cabells presenten caiguda",
            'description' => "El diagnòstic indica que estàs experimentant caiguda dels cabells, un fenomen comú però sovint preocupant.
              Aquesta caiguda pot ser temporal o més persistent, i pot estar influïda per factors com l'estrès,
              desequilibris hormonals,
              dieta inadequades, problemes del cuir cabellut o altres causes de dany capil·lar. Però no et preocupis!
              Amb un tractament
              adequat i una rutina específica, podràs fortificar els teus cabells i reduir la caiguda.",
          'content' => "<div class='max-w-6xl mx-auto px-4 py-10'>
      <!-- Causes Section -->
      <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
        <div class='mb-8'>
          <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>Per què cauen els cabells?</h2>
          <p class='mb-6 text-title'>La caiguda dels cabells pot tenir diverses causes. Algunes de les més comunes són:
          </p>
          <div class='grid grid-cols-1 md:grid-cols-2 gap-6'>
            <!-- Cause 1 -->
            <div class='bg-white rounded-lg shadow-md p-4'>
              <h3 class='font-semibold text-title mb-2'>Estrès i ansietat</h3>
              <p class='text-title'>
                Els episodis d'estrès poden afectar el cicle de creixement dels cabells, provocant una caiguda temporal.
              </p>
            </div>

            <!-- Cause 2 -->
            <div class='bg-white rounded-lg shadow-md p-4'>
              <h3 class='font-semibold text-title mb-2'>Desequilibris hormonals</h3>
              <p class='text-title'>
                Factors com l'embaràs, la menopausa, o problemes de tiroides poden alterar els nivells hormonals i
                provocar caiguda dels cabells.
              </p>
            </div>

            <!-- Cause 3 -->
            <div class='bg-white rounded-lg shadow-md p-4'>
              <h3 class='font-semibold text-title mb-2'>Alimentació poc equilibrada</h3>
              <p class='text-title'>
                La manca de nutrients com el ferro, les proteïnes o les vitamines (especialment la biotina i la vitamina
                D) pot afectar la salut capil·lar.
              </p>
            </div>

            <!-- Cause 4 -->
            <div class='bg-white rounded-lg shadow-md p-4'>
              <h3 class='font-semibold text-title mb-2'>Tractaments químics agressius</h3>
              <p class='text-title'>
                Tints, permanents i altres tractaments poden debilitar el cabell i provocar la seva caiguda si no es
                realitzen adequadament.
              </p>
            </div>

            <!-- Cause 5 -->
            <div class='bg-white rounded-lg shadow-md p-4'>
              <h3 class='font-semibold text-title mb-2'>Dany al cuir cabellut</h3>
              <p class='text-title'>
                Quan el cuir cabellut està obstruït, irritat o inflamant, això pot afectar l'arrel del cabell i
                accelerar-ne la caiguda.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Solutions Section -->
      <div class='bg-box p-8 rounded-lg shadow-md mb-8 transition-all duration-300 hover:shadow-lg'>
        <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-6'>
          Com prevenir i reduir la caiguda del cabell?
        </h2>

        <div class='grid grid-cols-1 md:grid-cols-2 gap-8'>
          <!-- Left Column -->
          <div>
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                Mantingues una Dieta Saludable
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <p>La nutrició és fonamental per la salut capil·lar. Assegura't d'incloure en la teva dieta:</p>
                <li><span class='font-medium'>Proteïnes:</span> Carn magra, peix, llegums, ous i fruits secs.</li>
                <li><span class='font-medium'>Ferro i zinc:</span> Espinacs, llegums, carn vermella, llavors de carbassa
                </li>
                <li><span class='font-medium'>Vitamines: </span> La biotina, la vitamina D i les vitamines del grup B
                  són essencials per al creixement del cabell. </li>
              </ul>
            </div>

            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                Cuir Cabellut Sa
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Massatges al cuir cabellut:</span> Realitzar massatges suaus pot estimular
                  la circulació sanguínia, afavorint la salut de les arrels i reduint la caiguda.</li>
                <li><span class='font-medium'>Exfoliació del cuir cabellut:</span> Els xampús o tractaments exfoliants
                  poden ajudar a eliminar les cèl·lules mortes i les impureses que obstrueixen els fol·licles pilosos.
                </li>
                <li><span class='font-medium'>Evitar l'ús excessiu de productes químics:</span> Redueix l'ús de tint,
                  permanents i altres tractaments agressius per evitar danyar els fol·licles pilosos.</li>
              </ul>
            </div>
          </div>

          <!-- Right Column -->
          <div>
            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                Tractaments Específics
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Xampú anti-caiguda:</span> Opta per xampús formulats per a fortificar la
                  fibra capil·lar i millorar la salut del cuir cabellut.
                  Busquem ingredients com la cafeïna, la biotina, la keratina o la saw palmetto per a estimular el
                  creixement dels cabells.</li>
                <li><span class='font-medium'>Sèrums o tractaments de creixement capil·lar:</span> Sèrums específics que
                  estimulen els fol·licles pilosos i ajuden a reduir la caiguda.</li>
                <li><span class='font-medium'>Tractaments professionals:</span> Els tractaments de mesoteràpia capil·lar
                  o el PRP (Plasma Ric en Plaquetes)
                  poden ser eficaços per regenerar els fol·licles pilosos i fomentar el creixement del cabell. Consulta
                  sempre un professional capil·lar per a més informació.
                </li>
              </ul>
            </div>

            <div class='mb-6'>
              <h3 class='text-lg font-semibold text-title flex items-center gap-2'>
                Evita Factors de Dany
              </h3>
              <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
                <li><span class='font-medium'>Evita la calor excessiva:</span> L'ús freqüent de planxes, assecadors i
                  rizadors pot debilitar els cabells.
                  Si els utilitzes, aplica sempre un protector tèrmic.</li>
                <li><span class='font-medium'>Evita pentinats agressius:</span> Pentinar el cabell amb força o quan està
                  mullat pot provocar la caiguda.
                  Usa pintes de dents amples i evita fregar els cabells amb tovalloles.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
        <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
          Remeis Naturals per Fortificar els Cabells i Reduir la Caiguda
        </h2>
        <div class=' gap-8'>
            <p class='text-title leading-relaxed'>
              Si prefereixes tractaments naturals, alguns remeis casolans poden ajudar-te a reduir la caiguda i millorar
              la salut dels teus cabells:
            </p>
            <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
              <li><span class='font-medium'>Oli de ricí:</span> Aquest oli és conegut per afavorir el creixement del
                cabell i estimular els fol·licles pilosos.
                Aplica'l a les arrels i deixa'l actuar durant la nit.</li>
              <li><span class='font-medium'>Te verd:</span> Rics en antioxidants, els te verd poden ajudar a reduir la
                caiguda i enfortir la fibra capil·lar.</li>
              <li><span class='font-medium'>Suc d'àloe vera:</span> Aplica el gel fresc d'àloe vera directament al cuir
                cabellut per alleujar qualsevol inflor o irritació i promoure el creixement.</li>
            </ul>
        </div>
      </div>

      <div class='bg-box p-8 rounded-lg shadow-md mb-8'>
        <h2 class='text-2xl font-semibold text-title border-b-2 border-amber-200 pb-2 mb-4'>
          Consells Professionals Addicionals:
        </h2>
        <div class='gap-8'>
            <ul class='list-disc ml-6 space-y-2 text-title mt-2'>
              <li><span class='font-medium'>Consulta mèdica:</span> Si la caiguda és excessiva o persisteix durant més
                de 3 mesos, és important consultar amb un dermatòleg o especialista capil·lar.
                Poden diagnosticar causes internes com desequilibris hormonals o problemes de salut subjacents.</li>
              <li><span class='font-medium'>Talls regulars:</span> Retallar les puntes cada 6-8 setmanes ajuda a
                prevenir que la caiguda del cabell s'agreugi, eliminant les puntes malmeses.</li>
            </ul>
        </div>
        <div class='bg-white p-4 rounded-lg mt-4 border-l-4 border-amber-600'>
            <h3 class='font-semibold text-title mb-2'>Recupera la salut del teu cabell i redueix la caiguda!</h3>
            <p class='text-gray-700'>
              Seguint aquestes recomanacions professionals i naturals, notaràs una
              millora en la fortalesa, salut i volum dels teus cabells. Si la caiguda persisteix o et preocupa, un
              especialista capil·lar podrà oferir-te un tractament personalitzat.
            </p>
          </div>
      </div>
    </div>",
  ]);

  Page::create([
    'title' => "Pell Normal o Eudermica",
    'slug' => "Pellnormal",
    'category' => "Pell",
    'edit' => true,
    'subtitle' => "",
    'description' => "Pell equilibrada, amb una producció adequada de sèu i humitat.
    Textura suau, porus poc visibles i aparença lluminosa i uniforme, sense sequetat ni excés de
    greix",
  'content' => "<div class='max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-6'>
            <div class='bg-box rounded-lg p-4 md:p-8 shadow-lg'>
                <!-- Title for content section -->
                <h2 class='text-2xl font-bold text-center mb-6 text-title'>
                    Pell normal
                </h2>

                <!-- Content layout -->
                <div class='flex flex-col md:flex-row gap-8 items-start'>
                    <!-- Information tables -->
                    <div class='w-full md:w-7/12'>
                        <div class='bg-white bg-opacity-80 p-4 md:p-6 rounded-lg shadow-md'>
                            <div class='overflow-x-auto'>

                                <table class='min-w-full md:w-auto max-w-full border-collapse mb-8 bg-white rounded-lg overflow-hidden'>
                                    <thead class='bg-amber-50'>
                                        <tr>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Característiques fisiològiques</th>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Observació visual</th>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Observació tàctil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='border-b border-amber-50  transition-colors'>
                                            <td class='py-3 px-2 md:px-4 align-top'>
                                                <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                                                    <li>Emulsió O/A</li>
                                                    <li>Secreció sebàcea suficient</li>
                                                    <li>Capa còrnia ben hidratada</li>
                                                    <li>Secrecions equilibrades</li>
                                                    <li>Pell fina i integritat del estrat corni</li>
                                                </ul>
                                            </td>
                                            <td class='py-3 px-2 md:px-4 align-top'>
                                                <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                                                    <li>Color rosat uniforme</li>
                                                    <li>Mate o lleugerament brillant</li>
                                                    <li>Porus tancats i petits</li>
                                                </ul>
                                            </td>
                                            <td class='py-3 px-2 md:px-4 align-top'>
                                                <ul class='list-disc pl-4 md:pl-5 md:text-sm text-sm space-y-1'>
                                                    <li>Llisa i suau al tacte</li>
                                                    <li>Flexible i elàstica</li>
                                                    <li>Reacciona bé al pinçament</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table class='min-w-full border-collapse bg-white rounded-lg overflow-hidden'>
                                    <thead class='bg-amber-50'>
                                        <tr>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Propietats</th>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Necessitats cutànies</th>
                                            <th
                                                class='py-3 px-2 md:px-4 text-left text-sm font-bold text-title border-b-2 border-amber-100'>
                                                Cures cosmètiques bàsiques</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class='border-b border-amber-50  transition-colors'>
                                            <td class='py-3 px-2 md:px-4 align-top'>
                                                <ul class='list-disc pl-4 md:pl-5 text-sm space-y-1'>
                                                    <li>No descama gràcies a la integritat de la capa còrnia</li>
                                                    <li>Tolera bé els sabons</li>
                                                    <li>Resisteix bé els canvis climàtics</li>
                                                    <li>Es bronzeja moderadament al sol</li>
                                                </ul>
                                            </td>
                                            <td class='py-3 px-2 md:px-4 align-top'>
                                                <ul class='list-disc pl-5 text-sm space-y-1'>
                                                    <li>Cap en concret, només cal mantenir el grau d'hidritació i la capacitat de protecció de l'estrat còrni</li>
                                                </ul>
                                            </td>
                                            <td class='py-3 px-4 align-top'>
                                                <ul class='list-disc pl-5 text-sm space-y-1'>
                                                    <li>Higiene amb aigua i sabó o amb emulsió netejadora</li>
                                                    <li>Aplicació de cremes fluides com a base de maquillatge</li>
                                                    <li>Aplicació de cremes A/O protectores i emol·lients</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Skin image -->
                    <div class='self-center mt-8 mx-auto md:mt-0'>
                        <div class='bg-gradient-to-b from-white to-[#f8f1ed]  p-4 md:p-6 rounded-lg shadow-md'>
                            <div class='flex justify-center'>
                                <img src='/images/PellNormal.png' alt='Pell seca alípica'
                                    class='rounded-lg hover:scale-105 transition-transform duration-300 max-h-[500px] w-auto object-contain border-[#E8C2B0] border-[1px]' />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>",
      ]);

      Page::Create([
        'title' => "Imatge Personal",
        'slug' => "Skin",
        'category' => "Recomenacions",
        'edit' => false,
        'subtitle' => "Centre d'Excel·lència en Estètica i Perruqueria",
        'description' => "",
        'content' => "<h1 class='text-center text-2xl font-bold text-title font-inter'> ASSESSORAMENT DE LA PELL</h1>
        
        <div class='flex justify-center py-10 md:py-20'>
          <div class='grid grid-cols-2 md:grid-cols-4 gap-12'>
            <div class='flex flex-col items-center'>
              <a href='/Page/Pellnormal' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/PellNormal.png' 
                    alt='Volum capilar' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL EUDERMICA </h1>
              </a>
            </div>

            <div class='flex flex-col items-center'>
              <a href='/Page/Alipicaskin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/Pell_seca_alípica.png' 
                    alt='Nutrició capilar' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL ALIPICA </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/DehyAlipica' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/Dehydrated-aliptic-skin.png' 
                    alt='Tractament per a encrespat' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL ALIPICA DESH.</h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/Oilyskin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/Pell_grassa_normal.png' 
                    alt='Reparació capilar' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL GRASSA </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/DehyOily' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/Dehydrated-oily-skin.png' 
                    alt='Tractament per a la caiguda del cabell' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL GRASSA DESH. </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/OccludedOilyskin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/pell_grasa_occ.png' 
                    alt='Tractament per a pitiriasi' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL GRASSA OCLUIDA </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/acne' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/acne.png' 
                    alt='Tractament per a cabell gras' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> ACNE </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/MixedSkin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/PellMixta.png' 
                    alt='Tractament per a cuir cabellut sensible' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL MIXTA </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/sensitiveskin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/sensitive-skin.png' 
                    alt='Tractament per a cuir cabellut sensible' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL SENSIBLE </h1>
              </a>
            </div>
            <div class='flex flex-col items-center'>
              <a href='/Page/DesvitalisedSkin' class='cursor-pointer no-underline'>
                <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                  <img 
                    src='/images/PellDesvitalitzada.png' 
                    alt='Tractament per a cuir cabellut sensible' 
                    class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                  />
                </div>
                <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PELL DESVITALITZADA </h1>
              </a>
            </div>
          </div>
        </div>",
      ]);

      Page::Create([
        'title' => "Imatge Personal",
        'slug' => "Capillary",
        'category' => "Recomenacions",
        'edit' => false,
        'subtitle' => "Centre d'Excel·lència en Estètica i Perruqueria",
        'description' => "",
        'content' => "<h1 class='text-center text-2xl font-bold text-title font-inter'> ASSESSORAMENT CAPIL·LAR </h1>
        
        <div class='flex justify-center py-10 md:py-20'>
            <div class='grid grid-cols-2 md:grid-cols-4 gap-12'>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Volum' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/volum.png' 
                                alt='Volum capilar' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> VOLUM </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Nutricio' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/nutricio.png' 
                                alt='Nutrició capilar' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> NUTRICIÓ </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Frizz' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/encrespat.png' 
                                alt='Tractament per a encrespat' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> ENCRESPAT </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/repair' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/reparar.png' 
                                alt='Reparació capilar' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> REPARAR </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/CaigudaCabell' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/caiguda.png' 
                                alt='Tractament per a la caiguda del cabell' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> CAIGUDA </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Pitiriasi' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/pitriasi.png' 
                                alt='Tractament per a pitiriasi' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> PITIRIASI </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Greix' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/greix.png' 
                                alt='Tractament per a cabell gras' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> GREIX </h1>
                    </a>
                </div>

                <div class='flex flex-col items-center'>
                    <a href='/Page/Cuirsensible' class='cursor-pointer no-underline'>
                        <div class='h-72 aspect-[3/4] bg-white flex justify-center items-center rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-xl group'>
                            <img 
                                src='/images/sensible.png' 
                                alt='Tractament per a cuir cabellut sensible' 
                                class='w-full h-full object-cover group-hover:scale-105 transition-all duration-500'
                            />
                        </div>
                        <h1 class='text-center text-lg font-bold text-title font-inter mt-6'> SENSIBLE </h1>
                    </a>
                </div>
            </div>
        </div>",
      ]);
    }
}