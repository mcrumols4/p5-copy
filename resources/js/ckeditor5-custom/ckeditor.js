import ClassicEditorBase from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';

import Essentials from '@ckeditor/ckeditor5-essentials/src/essentials';
import Bold from '@ckeditor/ckeditor5-basic-styles/src/bold';
import Italic from '@ckeditor/ckeditor5-basic-styles/src/italic';
import Font from '@ckeditor/ckeditor5-font/src/font';
import Paragraph from '@ckeditor/ckeditor5-paragraph/src/paragraph';
import Image from '@ckeditor/ckeditor5-image/src/image';
import ImageToolbar from '@ckeditor/ckeditor5-image/src/imagetoolbar';
import ImageCaption from '@ckeditor/ckeditor5-image/src/imagecaption';
import ImageUpload from '@ckeditor/ckeditor5-image/src/imageupload';
import Base64UploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/base64uploadadapter';
import GeneralHtmlSupport from '@ckeditor/ckeditor5-html-support/src/generalhtmlsupport';

export default class ClassicEditor extends ClassicEditorBase {}

ClassicEditor.builtinPlugins = [
  Essentials,
  Bold,
  Italic,
  Font,
  Paragraph,
  Image,
  ImageToolbar,
  ImageCaption,
  ImageUpload,
  Base64UploadAdapter,
  GeneralHtmlSupport
];

ClassicEditor.defaultConfig = {
  toolbar: ['bold', 'italic', 'fontSize', '|', 'imageUpload', '|', 'undo', 'redo'],
  image: {
    toolbar: ['imageTextAlternative', '|', 'imageStyle:full', 'imageStyle:side']
  },
  language: 'en'
};