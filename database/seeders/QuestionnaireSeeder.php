<?php

namespace Database\Seeders;

use App\Models\Form;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    public function run(): void
    {
        // Create the forms for skin and hair questionnaires
        $skinForm = Form::create([
            'title' => "Skin Form",
            'id' => 1
        ]);

        $hairForm = Form::create([
            'title' => "Hair Form", 
            'id' => 2
        ]);

        // ---------------------- SKIN QUESTIONNAIRE -------------------------
        
        // Create questions for the skin questionnaire
        $q1 = Question::create([ 
            'question' => "Com es veu la teva pell després de netejar-la al matí?",
            'form_id' => $skinForm->id,
        ]);

        $q2 = Question::create([ 
            'question' => "Tens descamació o zones molt seques?",
            'form_id' => $skinForm->id,
        ]);

        $q3 = Question::create([ 
            'question' => "Notes canvis segons l'estació?",
            'form_id' => $skinForm->id,
        ]);

        $q4 = Question::create([ 
            'question' => "La teva pell es veu oliosa al matí i al llarg del dia?",
            'form_id' => $skinForm->id,
        ]);

        $q5 = Question::create([ 
            'question' => "Quines zones són més greixoses?",
            'form_id' => $skinForm->id,
        ]);

        $q6 = Question::create([ 
            'question' => "Com reacciona la teva pell als productes hidratants?",
            'form_id' => $skinForm->id,
        ]);

        $q7 = Question::create([ 
            'question' => "Tens la pell sensible o irritada sovint?",
            'form_id' => $skinForm->id,
        ]);

        $q8 = Question::create([ 
            'question' => "Com et sents la teva pell a l'estiu?",
            'form_id' => $skinForm->id,
        ]);

        $q9 = Question::create([ 
            'question' => "Tens problemes de brillantor a la zona T?",
            'form_id' => $skinForm->id,
        ]);

        $q10 = Question::create([ 
            'question' => "Notes porus dilatats a tota la cara?",
            'form_id' => $skinForm->id,
        ]);

        $q11 = Question::create([ 
            'question' => "Tens brots d'acne sovint?",
            'form_id' => $skinForm->id,
        ]);

        $q12 = Question::create([ 
            'question' => "A la tarda la teva pell es veu oliosa només a la zona T?",
            'form_id' => $skinForm->id,
        ]);

        $q13 = Question::create([ 
            'question' => "La resta de la cara es veu seca o normal mentre la zona T és grassa?",
            'form_id' => $skinForm->id,
        ]);

        // Answers for the skin questionnaire
        Answer::create([
            'answer' => "Pell seca",
            'child_question_id' => $q2->id,
            'father_question_id' => $q1->id,
        ]);

        Answer::create([
            'answer' => "Pell normal",
            'child_question_id' => $q3->id,
            'father_question_id' => $q1->id,
        ]);

        Answer::create([
            'answer' => "Pell grassa",
            'child_question_id' => $q4->id,
            'father_question_id' => $q1->id,
        ]);

        Answer::create([
            'answer' => "Pell mixta",
            'child_question_id' => $q5->id,
            'father_question_id' => $q1->id,
        ]);
        
        
        Answer::create([
            'answer' => "Si",
            'child_question_id' => $q6->id,
            'father_question_id' => $q2->id,
        ]);

        Answer::create([
            'answer' => "No",
            'child_question_id' => $q7->id,
            'father_question_id' => $q2->id,
        ]);

        Answer::create([
            'answer' => "Sí, més seca a l'hivern i més greixosa a l'estiu",
            'child_question_id' => $q8->id,
            'father_question_id' => $q3->id,
        ]);

        Answer::create([
            'answer' => "No, sempre està equilibrada",
            'child_question_id' => $q9->id,
            'father_question_id' => $q3->id,
        ]);

        Answer::create([
            'answer' => "Sí, a tota la cara",
            'child_question_id' => $q10->id,
            'father_question_id' => $q4->id,
        ]);

        Answer::create([
            'answer' => "Sí, però només al final del dia",
            'child_question_id' => $q11->id,
            'father_question_id' => $q4->id,
        ]);

        Answer::create([
            'answer' => "Només la zona T",
            'child_question_id' => $q12->id,
            'father_question_id' => $q5->id,
        ]);

        Answer::create([
            'answer' => "Tota la cara però més a la zona T",
            'child_question_id' => $q13->id,
            'father_question_id' => $q5->id,
        ]);

        Answer::create([
            'answer' => "S'absorbeixen ràpidament i encara sembla resseca",
            'father_question_id' => $q6->id,
            'recommendation' => "Necessites hidratació intensa i olis nutritius. Evita productes amb alcohol.",
        ]);

        Answer::create([
            'answer' => "Es manté hidratada però sense greix",
            'father_question_id' => $q6->id,
            'recommendation' => " Utilitza productes hidratants però lleugers, sense olis excessius.",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $q7->id,
            'recommendation' => "Tria productes hipoal·lergènics i sense perfums.",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q7->id,
            'recommendation' => "Segueix amb la rutina adequada segons el teu tipus de pell.",
        ]);

        Answer::create([
            'answer' => "Més greixosa",
            'father_question_id' => $q8->id,
            'recommendation' => "Adapta la rutina amb productes matificants.",
        ]);

        Answer::create([
            'answer' => "Més seca",
            'father_question_id' => $q8->id,
            'recommendation' => "Afegeix hidratació lleugera però constant.",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $q9->id,
            'recommendation' => "Equilibra la hidratació amb productes específics.",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q9->id,
            'recommendation' => "Mantingueu una rutina de cura bàsica.",
        ]);

        Answer::create([
            'answer' => "Si",
            'father_question_id' => $q10->id,
            'recommendation' => "La teva pell necessita productes que regulin el sèu i minimitza els porus. ",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q10->id,
            'recommendation' => "Fes servir productes lleugers que controlin la brillantor.",
        ]);

        Answer::create([
            'answer' => "Si",
            'father_question_id' => $q11->id,
            'recommendation' => "Utilitza productes no comedogènics i regula la producció de sèu. ",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q11->id,
            'recommendation' => "Mantingueu una rutina suau i equilibrada.",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $q12->id,
            'recommendation' => "Necessites una crema hidratant lleugera i productes matificants per la zona T. ",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q12->id,
            'recommendation' => "Segueix una rutina per pells mixtes amb hidratació equilibrada.",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $q13->id,
            'recommendation' => "Aplica més hidratació a les zones seques i matifica la zona T.",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $q13->id,
            'recommendation' => "Mantingueu un equilibri amb productes específics per cada zona.",
        ]);

        // ---------------------- HAIR QUESTIONNAIRE -------------------------
        
        // Create questions for the hair questionnaire
        $h1 = Question::create([ 
            'question' => "Quin és el principal motiu de la teva preocupació?",
            'form_id' => $hairForm->id,
        ]);

        $h2 = Question::create([ 
            'question' => "Com descriuries l'aspecte general del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h3 = Question::create([ 
            'question' => "Com descriuries el gruix del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h4 = Question::create([ 
            'question' => "Quan exposes el teu cabell a la humitat (pluja o humitat ambiental), què succeeix?",
            'form_id' => $hairForm->id,
        ]);

        $h5 = Question::create([ 
            'question' => "Quin aspecte té el teu cabell després de rentar-lo i assecar-lo a l'aire?",
            'form_id' => $hairForm->id,
        ]);

        $h6 = Question::create([ 
            'question' => "Has fet algun canvi de color (tint, metxes, descoloració) al teu cabell recentment?",
            'form_id' => $hairForm->id,
        ]);

        $h7 = Question::create([ 
            'question' => "Es veu apagat i absorbeix ràpidament la humitat?",
            'form_id' => $hairForm->id,
        ]);

        $h8 = Question::create([ 
            'question' => "Després d'aplicar productes hidratants, com respon el teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h9 = Question::create([ 
            'question' => "Quan pentines el teu cabell, tens dificultats per desenredar-lo?",
            'form_id' => $hairForm->id,
        ]);

        $h10 = Question::create([ 
            'question' => "Has fet algun dels següents tractaments al teu cabell recentment?",
            'form_id' => $hairForm->id,
        ]);

        $h11 = Question::create([ 
            'question' => "Després de rentar-te el cabell, com es veu quan s'asseca a l'aire?",
            'form_id' => $hairForm->id,
        ]);

        $h12 = Question::create([ 
            'question' => "Com descriuries la textura del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h13 = Question::create([ 
            'question' => "Com descriuries la densitat del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h14 = Question::create([ 
            'question' => "Amb quina freqüència et rentes el cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h15 = Question::create([ 
            'question' => "Amb quina freqüència utilitzes eines de calor (assecador, planxa, tenacilles)?",
            'form_id' => $hairForm->id,
        ]);

        $h16 = Question::create([ 
            'question' => "Quant de temps et dura el pentinat després d'arranjar-te el cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h17 = Question::create([ 
            'question' => "Has notat que el teu cabell es trenca o es parteix amb facilitat?",
            'form_id' => $hairForm->id,
        ]);

        $h18 = Question::create([ 
            'question' => "Com descriuries el gruix del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h19 = Question::create([ 
            'question' => "Tens el cabell natural?",
            'form_id' => $hairForm->id,
        ]);

        $h20 = Question::create([ 
            'question' => "Has fet algun dels següents tractaments al teu cabell recentment?",
            'form_id' => $hairForm->id,
        ]);

        $h21 = Question::create([ 
            'question' => "Quan toques el teu cabell, com és la seva textura?",
            'form_id' => $hairForm->id,
        ]);

        $h22 = Question::create([ 
            'question' => "Quan observes el teu cuir cabellut, quins d'aquests símptomes identifiques amb més freqüència?",
            'form_id' => $hairForm->id,
        ]);

        $h23 = Question::create([ 
            'question' => "Quan observes el teu cuir cabellut, veus...?",
            'form_id' => $hairForm->id,
        ]);

        $h24 = Question::create([ 
            'question' => "Quin tipus de xampú utilitzes normalment?",
            'form_id' => $hairForm->id,
        ]);

        $h25 = Question::create([ 
            'question' => "Tens sensació de pessigolles o moviment al cuir cabellut, com si alguna cosa es desplacés entre els cabells?",
            'form_id' => $hairForm->id,
        ]);

        $h26 = Question::create([ 
            'question' => "Amb quina freqüència et rentes el cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h27 = Question::create([ 
            'question' => "Tens ferides o crostes al cuir cabellut?",
            'form_id' => $hairForm->id,
        ]);

        $h28 = Question::create([ 
            'question' => "Has notat estrès o cansament recentment?",
            'form_id' => $hairForm->id,
        ]);

        $h29 = Question::create([ 
            'question' => "Amb quina freqüència et rentes el cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h30 = Question::create([ 
            'question' => "Portes sovint el cabell cobert amb un gorro, gorra o casc?",
            'form_id' => $hairForm->id,
        ]);

        $h31 = Question::create([ 
            'question' => "Quant de temps al dia?",
            'form_id' => $hairForm->id,
        ]);

        $h32 = Question::create([ 
            'question' => "Quina franja d'edat tens?",
            'form_id' => $hairForm->id,
        ]);

        $h33 = Question::create([ 
            'question' => "Has notat plaques blanques o descamació al cuir cabellut?",
            'form_id' => $hairForm->id,
        ]);

        $h34 = Question::create([ 
            'question' => "Quan et pentines, notes que el cabell...?",
            'form_id' => $hairForm->id,
        ]);

        $h35 = Question::create([ 
            'question' => "Quan et cau el cabell amb facilitat, en quines situacions ho notes més?",
            'form_id' => $hairForm->id,
        ]);

        $h36 = Question::create([ 
            'question' => "Quina franja d'edat tens?",
            'form_id' => $hairForm->id,
        ]);

        $h37 = Question::create([ 
            'question' => "Has notat estrès o cansament recentment?",
            'form_id' => $hairForm->id,
        ]);

        $h38 = Question::create([ 
            'question' => "Prens medicació?",
            'form_id' => $hairForm->id,
        ]);

        $h39 = Question::create([ 
            'question' => "Amb quina freqüència et rentes el cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h40 = Question::create([ 
            'question' => "Com descriuries el gruix del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        $h41 = Question::create([ 
            'question' => "Quina és la llargada del teu cabell?",
            'form_id' => $hairForm->id,
        ]);

        // Answers for the hair questionnaire
        Answer::create([
            'answer' => "La salut o l'aspecte del meu cabell (caiguda, sequedat, encrespament, cabell fi)",
            'father_question_id' => $h1->id,
            'child_question_id' => $h2->id,
        ]);

        Answer::create([
            'answer' => "Molèsties o problemes al cuir cabellut (caiguda, picor, descamació)",
            'father_question_id' => $h1->id,
            'child_question_id' => $h22->id,
        ]);

        Answer::create([
            'answer' => "Arrissat i/o sec",
            'father_question_id' => $h2->id,
            'child_question_id' => $h3->id,
        ]);

        Answer::create([
            'answer' => "Fi i/o dèbil",
            'father_question_id' => $h2->id,
            'child_question_id' => $h12->id,
        ]);

        Answer::create([
            'answer' => "Més aviat fi",
            'father_question_id' => $h3->id,
            'child_question_id' => $h4->id,
        ]);

        Answer::create([
            'answer' => "Gruixut",
            'father_question_id' => $h3->id,
            'child_question_id' => $h7->id,
        ]);

        Answer::create([
            'answer' => "S'encrespa i es torna rebel",
            'father_question_id' => $h4->id,
            'child_question_id' => $h5->id,
        ]);

        Answer::create([
            'answer' => "No canvia gaire o es manté controlat",
            'father_question_id' => $h4->id,
            'recommendation' => "CABELL_ENCRESPAT_LLIS",
        ]);

        Answer::create([
            'answer' => "Llis o lleugerament ondulat",
            'father_question_id' => $h5->id,
            'child_question_id' => $h6->id,
        ]);

        Answer::create([
            'answer' => "Encrespat, amb rínxols poc definits i un aspecte irregular",
            'father_question_id' => $h5->id,
            'child_question_id' => $h6->id,
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h6->id,
            'recommendation' => "TRACTAMENT_HIDRATACIO_INTENSIU",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h6->id,
            'recommendation' => "TRACTAMENT_HIDRATACIO_CABELL_SEC",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h7->id,
            'child_question_id' => $h8->id,
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h7->id,
            'recommendation' => "CABELL_ENCRESPAT_INTENS",
        ]);

        Answer::create([
            'answer' => "Es torna inflat o amb frizz",
            'father_question_id' => $h8->id,
            'recommendation' => "CABELL_ENCRESPAT_INTENS",
        ]);

        Answer::create([
            'answer' => "Sembla absorbir els productes però continua sec",
            'father_question_id' => $h8->id,
            'child_question_id' => $h9->id,
        ]);

        Answer::create([
            'answer' => "Sí, s'embulla fàcilment i es trenca",
            'father_question_id' => $h9->id,
            'child_question_id' => $h10->id,
        ]);

        Answer::create([
            'answer' => "No, es desenreda sense problemes",
            'father_question_id' => $h9->id,
            'child_question_id' => $h11->id,
        ]);

        Answer::create([
            'answer' => "Canvi de forma permanent (permanent, allisat o rínxols permanents)",
            'father_question_id' => $h10->id,
            'recommendation' => "TRACTAMENT_REPARADOR_INTENSIU",
        ]);

        Answer::create([
            'answer' => "Coloració (tints, metxes o decoloracions)",
            'father_question_id' => $h10->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Cap d'aquests",
            'father_question_id' => $h10->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Apagat i sense brillantor",
            'father_question_id' => $h11->id,
            'recommendation' => "TRACTAMENT_HIDRATACIO_INTENSIU",
        ]);

        Answer::create([
            'answer' => "Brillant i amb aspecte saludable",
            'father_question_id' => $h11->id,
            'recommendation' => "TRACTAMENT_HIDRATACIO_CABELL_SEC",
        ]);

        Answer::create([
            'answer' => "Delicat, suau",
            'father_question_id' => $h12->id,
            'child_question_id' => $h13->id,
        ]);

        Answer::create([
            'answer' => "Fràgil amb puntes obertes",
            'father_question_id' => $h12->id,
            'child_question_id' => $h18->id,
        ]);

        Answer::create([
            'answer' => "Poca densitat (es veu el cuir cabellut amb facilitat)",
            'father_question_id' => $h13->id,
            'child_question_id' => $h14->id,
        ]);

        Answer::create([
            'answer' => "Densitat moderada (ni molt espès ni molt fi)",
            'father_question_id' => $h13->id,
            'child_question_id' => $h16->id,
        ]);

        Answer::create([
            'answer' => "Cada dia",
            'father_question_id' => $h14->id,
            'child_question_id' => $h15->id,
        ]);

        Answer::create([
            'answer' => "Un cop o dos per setmana",
            'father_question_id' => $h14->id,
            'recommendation' => "TRACTAMENT_VOLUM_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Freqüentment (més de 3 cops per setmana)",
            'father_question_id' => $h15->id,
            'recommendation' => "TRACTAMENT_REPARADOR_INTENSIU",
        ]);

        Answer::create([
            'answer' => "Poques vegades o mai",
            'father_question_id' => $h15->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Només unes hores",
            'father_question_id' => $h16->id,
            'child_question_id' => $h17->id,
        ]);

        Answer::create([
            'answer' => "Tot el dia sense problemes",
            'father_question_id' => $h16->id,
            'recommendation' => "TRACTAMENT_VOLUM",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h17->id,
            'recommendation' => "TRACTAMENT_REPARADOR_INTENSIU",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h17->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Prim",
            'father_question_id' => $h18->id,
            'child_question_id' => $h19->id,
        ]);

        Answer::create([
            'answer' => "Normal (ni molt fi ni molt gruixut)",
            'father_question_id' => $h18->id,
            'child_question_id' => $h19->id,
        ]);

        Answer::create([
            'answer' => "Gruixut (fort i dens)",
            'father_question_id' => $h18->id,
            'child_question_id' => $h19->id,
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h19->id,
            'child_question_id' => $h21->id,
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h19->id,
            'child_question_id' => $h20->id,
        ]);

        Answer::create([
            'answer' => "Canvi de forma permanent",
            'father_question_id' => $h20->id,
            'recommendation' => "TRACTAMENT_REPARADOR_INTENSIU",
        ]);

        Answer::create([
            'answer' => "Coloració (tints, metxes o decoloracions)",
            'father_question_id' => $h20->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Aspre (rugós o amb poca suavitat)",
            'father_question_id' => $h21->id,
            'recommendation' => "TRACTAMENT_REPARADOR_INTENSIU",
        ]);

        Answer::create([
            'answer' => "Suau (llis i agradable al tacte)",
            'father_question_id' => $h21->id,
            'recommendation' => "TRACTAMENT_REPARADOR",
        ]);

        Answer::create([
            'answer' => "Picor, molèsties al cuir cabellut, cosetes blanques quan et pentines",
            'father_question_id' => $h22->id,
            'child_question_id' => $h23->id,
        ]);

        Answer::create([
            'answer' => "El cabell que cau amb facilitat i/o aspecte oleós o brillant poc després de rentar-lo",
            'father_question_id' => $h22->id,
            'child_question_id' => $h34->id,
        ]);

        Answer::create([
            'answer' => "Vermell o irritat",
            'father_question_id' => $h23->id,
            'child_question_id' => $h24->id,
        ]);

        Answer::create([
            'answer' => "Flocs blancs",
            'father_question_id' => $h23->id,
            'child_question_id' => $h29->id,
        ]);

        Answer::create([
            'answer' => "Xampú d'una botiga especialitzada",
            'father_question_id' => $h24->id,
            'child_question_id' => $h25->id,
        ]);

        Answer::create([
            'answer' => "Xampú normal del supermercat",
            'father_question_id' => $h24->id,
            'child_question_id' => $h27->id,
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h25->id,
            'recommendation' => "FARMACIÓ_TRACTAMENT_DE_POLLS",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h25->id,
            'child_question_id' => $h26->id,
        ]);

        Answer::create([
            'answer' => "Cada dia",
            'father_question_id' => $h26->id,
            'recommendation' => "ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES",
        ]);

        Answer::create([
            'answer' => "Un cop o dos per setmana",
            'father_question_id' => $h26->id,
            'recommendation' => "ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h27->id,
            'recommendation' => "FARMACIÓ_TRACTAMENT_DE_POLLS",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h27->id,
            'recommendation' => "ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h28->id,
            'recommendation' => "ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h28->id,
            'recommendation' => "ASSESSORAMENT_CUIR_CABELLUT_SENSIBLES",
        ]);

        Answer::create([
            'answer' => "Cada dia",
            'father_question_id' => $h29->id,
            'child_question_id' => $h30->id,
        ]);

        Answer::create([
            'answer' => "Un cop o dos per setmana",
            'father_question_id' => $h29->id,
            'child_question_id' => $h32->id,
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h30->id,
            'child_question_id' => $h31->id,
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h30->id,
            'recommendation' => "ASSESSORAMENT_CASPA",
        ]);

        Answer::create([
            'answer' => "Menys de dues hores",
            'father_question_id' => $h31->id,
            'recommendation' => "ASSESSORAMENT_CASPA",
        ]);

        Answer::create([
            'answer' => "Més de dues hores",
            'father_question_id' => $h31->id,
            'recommendation' => "ASSESSORAMENT_CASPA",
        ]);

        Answer::create([
            'answer' => "Menys de 20 anys",
            'father_question_id' => $h32->id,
            'recommendation' => "ASSESSORAMENT_CASPA_PEELING",
        ]);

        Answer::create([
            'answer' => "Entre 20 i 50 anys",
            'father_question_id' => $h32->id,
            'recommendation' => "ASSESSORAMENT_CASPA_PEELING",
        ]);

        Answer::create([
            'answer' => "Més de 50 anys",
            'father_question_id' => $h32->id,
            'recommendation' => "ASSESSORAMENT_CASPA_PEELING",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h33->id,
            'recommendation' => "ASSESSORAMENT_CASPA",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h33->id,
            'recommendation' => "ASSESSORAMENT_CASPA",
        ]);

        Answer::create([
            'answer' => "Cau amb facilitat",
            'father_question_id' => $h34->id,
            'child_question_id' => $h35->id,
        ]);

        Answer::create([
            'answer' => "Té un aspecte oleós o brillant",
            'father_question_id' => $h34->id,
            'child_question_id' => $h39->id,
        ]);

        Answer::create([
            'answer' => "Quan et pentines o et raspalles el cabell",
            'father_question_id' => $h35->id,
            'child_question_id' => $h36->id,
        ]);

        Answer::create([
            'answer' => "Després de rentar-te cabell",
            'father_question_id' => $h35->id,
            'child_question_id' => $h36->id,
        ]);

        Answer::create([
            'answer' => "Sempre",
            'father_question_id' => $h35->id,
            'child_question_id' => $h38->id,
        ]);

        Answer::create([
            'answer' => "Menys de 40 anys",
            'father_question_id' => $h36->id,
            'child_question_id' => $h37->id,
        ]);

        Answer::create([
            'answer' => "Més de 40 anys",
            'father_question_id' => $h36->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA_COMPLEX_VITAMÍNIC",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h37->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h37->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA",
        ]);

        Answer::create([
            'answer' => "Sí",
            'father_question_id' => $h38->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA",
        ]);

        Answer::create([
            'answer' => "No",
            'father_question_id' => $h38->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA",
        ]);

        Answer::create([
            'answer' => "Cada dia",
            'father_question_id' => $h39->id,
            'child_question_id' => $h40->id,
        ]);

        Answer::create([
            'answer' => "Un cop o dos per setmana",
            'father_question_id' => $h39->id,
            'recommendation' => "ASSESSORAMENT_ANTICAIGUDA",
        ]);

        Answer::create([
            'answer' => "Prim",
            'father_question_id' => $h40->id,
            'child_question_id' => $h41->id,
        ]);

        Answer::create([
            'answer' => "Normal (ni molt fi ni molt gruixut)",
            'father_question_id' => $h40->id,
            'child_question_id' => $h41->id,
        ]);

        Answer::create([
            'answer' => "Gruixut (fort i dens)",
            'father_question_id' => $h40->id,
            'child_question_id' => $h41->id,
        ]);

        Answer::create([
            'answer' => "Curta",
            'father_question_id' => $h41->id,
            'recommendation' => "ASSESSORAMENT_DE_CUIR_CABELLUT_I_CABELL_GRAS",
        ]);

        Answer::create([
            'answer' => "Mitjana (fins les espatlles)",
            'father_question_id' => $h41->id,
            'recommendation' => "ASSESSORAMENT_DE_CUIR_CABELLUT_I_CABELL_GRAS",
        ]);

        Answer::create([
            'answer' => "Llarga",
            'father_question_id' => $h41->id,
            'recommendation' => "ASSESSORAMENT_DE_CUIR_CABELLUT_I_CABELL_GRAS",
        ]);
    }
}