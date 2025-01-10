import './bootstrap';
import 'flowbite';
import "/node_modules/select2/dist/css/select2.css";
import select2 from 'select2';
select2();

import jQuery from 'jquery';
window.$ = jQuery;

import axios from 'axios';

// Set Axios default headers
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.baseURL = '/'; // Optional: Base URL for your API
const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
axios.defaults.headers.common['X-CSRF-TOKEN'] = token;

import 'summernote/dist/summernote-lite.min.css';
import 'summernote/dist/summernote-lite.min.js';

// Initialize Summernote (example)
document.addEventListener('DOMContentLoaded', function () {
    $('#summernote').summernote({
        placeholder: 'Tulis sesuatu...',
        tabsize: 2,
        height: 480, // Height of the editor
        toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
    ]
    });
});

// Import Simple Datatables
import { DataTable } from "simple-datatables";

// Initialize a DataTable (example usage)
document.addEventListener("DOMContentLoaded", function () {
    const table = document.querySelector("#dataTable");
    if (table) {
        new DataTable(table, {
            searchable: true,
            sortable: true
        });
    }
});