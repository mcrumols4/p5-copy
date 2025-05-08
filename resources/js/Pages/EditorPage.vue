<script setup>
import { router } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';
import { Head } from '@inertiajs/vue3';
import { defineProps, ref } from 'vue';
import { onMounted } from 'vue'
import { ClassicEditor, Essentials, Bold, Italic, Font, Paragraph, Image, ImageCaption, ImageToolbar, ImageUpload, Base64UploadAdapter, GeneralHtmlSupport } from 'ckeditor5';
import 'ckeditor5/ckeditor5.css';
import { useForm } from '@inertiajs/vue3'
import AlertNotification from '@/Components/AlertNotification.vue';

const props = defineProps({
  pages: Array,
  isAuthenticated: Boolean,
  flash: Object,
});

const alert = ref({
  show: false,
  type: 'success',
  message: '',
  position: 'top-right',
  duration: 5000
});

const showAlert = (type, message) => {
  alert.value = {
    show: true,
    type: type,
    message: message,
    position: 'top-right',
    duration: 5000
  };

  setTimeout(() => {
    closeAlert();
  }, 5000);
};

const closeAlert = () => {
  alert.value.show = false;
};

if (props.flash?.success) {
  showAlert('success', props.flash.success);
} else if (props.flash?.error) {
  showAlert('error', props.flash.error);
}

const slug = ref(props.pages[0].slug);

onMounted(() => {
  ClassicEditor
    .create(document.querySelector('#editor'), {
      licenseKey: 'GPL', // Or 'GPL'.fffff
      plugins: [Essentials, Bold, Italic, Font, Paragraph, Image, ImageCaption, ImageToolbar, ImageUpload, Base64UploadAdapter, GeneralHtmlSupport],
      htmlSupport: {
        allow: [
          {
            name: /.*/,
            attributes: true,
            classes: true,
            styles: true
          }
        ]
      },
      toolbar: [
        'undo', 'redo', '|', 'bold', 'italic', '|',
        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'insertImage'
      ],
      image: {
        toolbar: ['toogleImageCaption']
      }
    })
    .then(editorInstance => {
      window.editor = editorInstance;

      editorInstance.model.document.on('change:data', () => {
        form.content = editorInstance.getData();
      });
    });
})

const form = useForm({
  slug: slug.value,
  title: props.pages[0].title,
  subtitle: props.pages[0].subtitle,
  description: props.pages[0].description,
  content: props.pages[0].content,
})

function submit() {
  if (window.editor) {
    form.content = window.editor.getData();
  }

  router.post('/Edit/' + slug.value, form);
}

const subtitle = form.subtitle;
const description = form.description;
</script>
<template>

  <Head title="EditPage" />
  <MainLayout>
    <AlertNotification :show="alert.show" :type="alert.type" :message="alert.message" :position="alert.position"
      :duration="alert.duration" @close="closeAlert" />
    <form @submit.prevent="submit" enctype="multipart/form-data" method="post">
      <div class="pt-24 bg-gradient-to-r from-[#FFF1EA] to-white mb-6">
        <div class="max-w-6xl mx-auto px-4 py-12">
          <div class="flex flex-col md:flex-row items-center gap-8">
            <!-- Text Content -->
            <div class="w-full">
              <!-- <h1 class="text-4xl font-bold text-title">{{ page.title }}</h1> -->
              <label for="title">Títol</label>
              <input type="text" v-model="form.title" id="title" class="w-full mb-5 rounded">
              <!-- <h2 class="text-2xl italic text-title mt-2">{{ page.subtitle }}</h2> -->
              <div div v-if="subtitle != ''">
                <label for="subtitle">Subtítol</label>
                <input type="text" v-model="form.subtitle" id="subtitle" class="w-full mb-5 rounded">
              </div>
              <div v-if="description != ''">
                <!-- <p class="mt-4 text-gray-700/80">
                  {{ page.description }}
                  </p> -->
                <label for="description">Descripció</label>
                <textarea v-model="form.description" id="description"
                  class="w-full rounded h-24">{{ form.description }}</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <textarea v-html="form.content" id="editor" v-model="form.content"></textarea>
      <div class="justify-self-center">
        <button type="submit" class="mx-10 my-10 bg-blue-700 text-white text-lg py-2 px-4 rounded-lg"><i
            class="pi pi-save mr-2"></i>Desar</button>
      </div>
    </form>
  </MainLayout>
</template>

<style>
.ck-editor__editable {
  max-height: 1000px;
  overflow: scroll;
}

table {
  border-collapse: separate;
  border-spacing: 0;
}

th,
td {
  border: 1px solid #e5e7eb;
}

th:first-child {
  border-top-left-radius: 0.5rem;
}

th:last-child {
  border-top-right-radius: 0.5rem;
}

tr:last-child td:first-child {
  border-bottom-left-radius: 0.5rem;
}

tr:last-child td:last-child {
  border-bottom-right-radius: 0.5rem;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

/* Hover effect para las tarjetas */
.rounded-2xl {
  transition: transform 0.3s ease-in-out;
}

.rounded-2xl:hover {
  transform: translateY(-5px);
}

.rounded-lg {
  transition: all 0.3s ease;
}

.rounded-lg:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
}
</style>