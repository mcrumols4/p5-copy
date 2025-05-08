# Imatge Personal - INS Narcís Monturiol (Ca)

## Descripció
Pàgina web desenvolupada per a l'INS Narcís Monturiol que ofereix recomanacions personalitzades per a la cura de la pell i els cabells. Inclou qüestionaris interactius de diagnòstic, articles informatius i consells especialitzats per millorar la imatge personal.

## Tecnologies Utilitzades
- **Backend**: Laravel 10
- **Frontend**: Vue.js 3 + Inertia.js
- **Base de Dades**: MySQL
- **Estils**: Tailwind CSS
- **Autenticació**: Laravel Breeze
- **Editor**: CKEditor 5
- **Entorn**: Laravel Sail (Docker)

## Estructura del Projecte

### Pàgines Principals

#### Pàgines de Diagnòstic
- **SkinQuestionnaire.vue**: Qüestionari interactiu per diagnosticar el tipus de pell
- **HairQuestionnaire.vue**: Qüestionari interactiu per diagnosticar el tipus de cabell
- **Diagnostic.vue**: Component base per als qüestionaris
- **SkinDiagnostic.vue**: Lògica específica per a diagnòstic de pell

#### Pàgines de contingut
- **Welcome.vue**: Pàgina d'inici amb informació general
- **DynamicPage.vue**: Pàgina dinàmica per a contingut editable
- **SkinPage.vue**: Pàgina específica sobre cures de la pell
- **VisitSpecialist.vue**: Informació sobre quan visitar un especialista
- **AdvicePage.vue**: Consells i recomanacions generals

#### Panell d'Administració
- **Questionnaire/Admin/Index.vue**: Gestió de qüestionaris
- **EditorPage.vue**: Editor de contingut amb CKEditor
- **Dashboard.vue**: Panell de control principal

### Models

#### Form (Formulari)
- Representa un qüestionari de diagnòstic
- Conté múltiples preguntes
- Atributs:
 - `id`: Identificador únic
 - `name`: Nom del formulari
 - `description`: Descripció del formulari
 - `created_at` i `updated_at`: Timestamps

#### Question (Pregunta)
- Representa una pregunta del qüestionari
- Pot tenir múltiples respostes
- Atributs:
 - `id`: Identificador únic
 - `question`: Text de la pregunta
 - `form_id`: ID del formulari al qual pertany
 - `created_at` i `updated_at`: Timestamps

#### Answer (Resposta)
- Representa una resposta a una pregunta
- Pot estar vinculada a una altra pregunta (resposta condicional)
- Atributs:
 - `id`: Identificador únic
 - `answer`: Text de la resposta
 - `father_question_id`: ID de la pregunta a què respon
 - `child_question_id`: ID de la pregunta següent (opcional)
 - `recommendation`: Recomanació personalitzada (opcional)
 - `created_at` i `updated_at`: Timestamps

### Controladors

#### DiagnosticController
- `showSkin()`: Mostra el qüestionari de pell
- `showHair()`: Mostra el qüestionari capil·lar
- `getFirstQuestion()`: Obté la primera pregunta
- `getNextQuestion()`: Obté la pregunta següent
- `getResult()`: Obté el resultat del diagnòstic

#### QuestionnaireAdminController
- `index()`: Mostra tots els formularis
- `createQuestion()`: Crea una pregunta nova
- `updateQuestion()`: Actualitza una pregunta
- `deleteQuestion()`: Elimina una pregunta
- `createAnswer()`: Crea una resposta nova
- `updateAnswer()`: Actualitza una resposta
- `deleteAnswer()`: Elimina una resposta

### Components

#### Layouts
- **MainLayout.vue**: Layout principal amb navegació i footer
- **Navigation.vue**: Barra de navegació responsive
- **Footer.vue**: Peu de pàgina

#### Components d'UI
- **QuestionCard.vue**: Targeta per mostrar preguntes
- **AnswerCard.vue**: Targeta per mostrar respostes
- **Modal.vue**: Component modal reutilitzable

## Funcionalitats

### Qüestionaris de Diagnòstic
- Qüestionaris interactius per a pell i cabell
- Preguntes dinàmiques basades en respostes anteriors
- Recomanacions personalitzades segons el diagnòstic
- Resultats detallats amb explicacions i consells

### Contingut Informatiu
- Articles sobre cura personal
- Consells especialitzats
- Informació sobre tractaments
- Guies de cura

### Panell d'Administració
- Editor WYSIWYG per contingut
- Gestió de qüestionaris
- Sistema de recomanacions
- Validació de dades

### Interfície d'usuari
- Disseny responsive i modern
- Animacions i transicions suaus
- Modals interactius
- Formularis validats

### Seguretat
- Autenticació d'usuaris
- Control d'accés basat en rols
- Validació de dades
- Protecció CSRF

## Instal·lació

1. Clonar el repositori:
```bash
git clone [URL_DEL_REPOSITORI]
````

2. Instal·lar dependències:
```bash
composer install
npm install
````

3. Configurar l'entorn:
```bash
cp .env.example .env
````

4. Configurar la base de dades a `.env`:
````
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nom_base_dades
DB_USERNAME=sail
DB_PASSWORD=password
````

5. Iniciar Sail:
```bash
./vendor/bin/sail up -d
````

6. Generar clau d'aplicació:
```bash
./vendor/bin/sail artisan key:generate
````

7. Executar migracions:
```bash
./vendor/bin/sail artisan migrate
````

8. Compilar assets:
```bash
./vendor/bin/sail npm run dev
````

## Ús

### Navegació Principal
1. Accedir a la pàgina principal
2. Explorar les diferents seccions (Pell, Cabell, Consells)
3. Realitzar qüestionaris de diagnòstic
4. Llegir articles i recomanacions

### Realitzar un Diagnòstic
1. Seleccionar el tipus de diagnòstic (Pell o Cabell)
2. Respondre les preguntes del qüestionari
3. Rebre recomanacions personalitzades
4. Accedir a informació detallada sobre el diagnòstic

### Panell d'Administració
1. Iniciar sessió com a administrador
2. Gestionar contingut i qüestionaris
3. Actualitzar recomanacions
4. Publicar nous articles

## Manteniment

### Actualitzacions
```bash
./vendor/bin/sail composer update
./vendor/bin/sail npm update
````

### Neteja de Caché
```bash
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan view:clear
````

### Ordres Útils
```bash
# Iniciar Sail
./vendor/bin/sail up -d

# Aturar Sail
./vendor/bin/sail down

# Accedir a l'intèrpret d'ordres de Sail
./vendor/bin/sail shell

# Executar ordres npm
./vendor/bin/sail npm run dev

# Executar comandes artisan
./vendor/bin/sail artisan [ordre]
````

# Personal Image - INS Narcís Monturiol (En)

## Description
Website developed for INS Narcís Monturiol that offers personalized recommendations for skin and hair care. Includes interactive diagnostic questionnaires, informative articles and specialized advice to improve personal image.

## Technologies Used
- **Backend**: Laravel 10
- **Frontend**: Vue.js 3 + Inertia.js
- **Database**: MySQL
- **Styles**: Tailwind CSS
- **Authentication**: Laravel Breeze
- **Editor**: CKEditor 5
- **Environment**: Laravel Sail (Docker)

## Project Structure

### Main Pages

#### Diagnostic Pages
- **SkinQuestionnaire.vue**: Interactive questionnaire to diagnose skin type
- **HairQuestionnaire.vue**: Interactive questionnaire to diagnose hair type
- **Diagnostic.vue**: Base component for questionnaires
- **SkinDiagnostic.vue**: Specific logic for skin diagnosis

#### Content Pages
- **Welcome.vue**: Home page with general information
- **DynamicPage.vue**: Dynamic page for content editable
- **SkinPage.vue**: Skincare specific page
- **VisitSpecialist.vue**: Information on when to visit a specialist
- **AdvicePage.vue**: General advice and recommendations

#### Admin Panel
- **Questionnaire/Admin/Index.vue**: Questionnaire management
- **EditorPage.vue**: Content editor with CKEditor
- **Dashboard.vue**: Main control panel

### Models

#### Form
- Represents a diagnostic questionnaire
- Contains multiple questions
- Attributes:
- `id`: Unique identifier
- `name`: Form name
- `description`: Form description
- `created_at` and `updated_at`: Timestamps

#### Question
- Represents a questionnaire question
- Can have multiple answers
- Attributes:
- `id`: Unique identifier
- `question`: Question text
- `form_id`: ID of the form it belongs to
- `created_at` and `updated_at`: Timestamps

#### Answer
- Represents an answer to a question
- Can be linked to another question (conditional answer)
- Attributes:
- `id`: Unique identifier
- `answer`: Text of the answer
- `father_question_id`: ID of the question it answers
- `child_question_id`: ID of the next question (optional)
- `recommendation`: Personalized recommendation (optional)
- `created_at` and `updated_at`: Timestamps

### Controllers

#### DiagnosticController
- `showSkin()`: Show the skin questionnaire
- `showHair()`: Show the hair questionnaire
- `getFirstQuestion()`: Get the first question
- `getNextQuestion()`: Get the next question
- `getResult()`: Get the result of the diagnostic

#### QuestionnaireAdminController
- `index()`: Show all forms
- `createQuestion()`: Create a new question
- `updateQuestion()`: Update a question
- `deleteQuestion()`: Delete a question
- `createAnswer()`: Create a new answer
- `updateAnswer()`: Update an answer
- `deleteAnswer()`: Delete an answer

### Components

#### Layouts
- **MainLayout.vue**: Main layout with navigation and footer
- **Navigation.vue**: Responsive navigation bar
- **Footer.vue**: Footer

#### UI Components
- **QuestionCard.vue**: Card to display questions
- **AnswerCard.vue**: Card to display answers
- **Modal.vue**: Reusable modal component

## Features

### Diagnostic Questionnaires
- Interactive questionnaires for skin and hair
- Dynamic questions based on previous answers
- Personalized recommendations according to diagnosis
- Detailed results with explanations and tips

### Informative Content
- Articles on personal care
- Specialized advice
- Information on treatments
- Care guides

### Administration Panel
- WYSIWYG editor for content
- Questionnaire management
- Recommendation system
- Data validation

### User interface
- Responsive and modern design
- Smooth animations and transitions
- Interactive modals
- Validated forms

### Security
- User authentication
- Role-based access control
- Data validation
- CSRF protection

## Installation

1. Clone the repository:
```bash
git clone [URL_DEL_REPOSITORI]
````

2. Install dependencies:
```bash
composer install
npm install
`````

3. Configure environment:
```bash
cp .env.example .env
````

4. Configure the database in `.env`:
````
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=sail
DB_PASSWORD=password
````

5. Start Sail:
```bash
./vendor/bin/sail up -d
````

6. Generate application key:
```bash
./vendor/bin/sail artisan key:generate
````

7. Run migrations:
```bash
./vendor/bin/sail artisan migrate
````

8. Compile assets:
```bash
./vendor/bin/sail npm run dev
````

## Usage

### Main Navigation
1. Access the main page
2. Explore the different sections (Skin, Hair, Tips)
3. Perform diagnostic questionnaires
4. Read articles and recommendations

### Perform a Diagnosis
1. Select the type of diagnosis (Skin or Hair)
2. Answer the questionnaire questions
3. Receive personalized recommendations
4. Access detailed information about the diagnosis

### Administration Panel
1. Log in as administrator
2. Manage content and questionnaires
3. Update recommendations
4. Publish new articles

## Maintenance

### Updates
```bash
./vendor/bin/sail composer update
./vendor/bin/sail npm update
````

### Clear Cache
```bash
./vendor/bin/sail artisan cache:clear
./vendor/bin/sail artisan config:clear
./vendor/bin/sail artisan view:clear
````

### Useful Orders
```bash
# Start Sail
./vendor/bin/sail up -d

# Stop Sail
./vendor/bin/sail down

# Access the Sail shell
./vendor/bin/sail shell

# Run npm commands
./vendor/bin/sail npm run dev

# Run artisan commands
./vendor/bin/sail artisan [command]
````
