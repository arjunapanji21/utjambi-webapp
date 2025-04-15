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
axios.defaults.baseURL = '/v2/'; // Optional: Base URL for your API

// Get CSRF token safely
const tokenElement = document.querySelector('meta[name="csrf-token"]');
if (tokenElement) {
    axios.defaults.headers.common['X-CSRF-TOKEN'] = tokenElement.getAttribute('content');
}

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

// Import Flowbite Dropdown
import { Dropdown } from 'flowbite';

// Initialize Flowbite Dropdowns and Mega Menus
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all dropdowns and mega menus
    const dropdownElements = document.querySelectorAll('[data-dropdown-toggle]');
    
    dropdownElements.forEach(triggerEl => {
        const targetEl = document.getElementById(triggerEl.getAttribute('data-dropdown-toggle'));
        if (targetEl) {
            new Dropdown(targetEl, triggerEl, {
                placement: 'bottom',
                offsetDistance: 10,
                delay: 50,
                onHide: () => {
                    targetEl.classList.remove('show');
                    targetEl.style.opacity = '0';
                    targetEl.style.transform = 'translateY(15px) scale(0.98)';
                    setTimeout(() => {
                        targetEl.classList.add('hidden');
                    }, 300);
                },
                onShow: () => {
                    targetEl.classList.remove('hidden');
                    setTimeout(() => {
                        targetEl.classList.add('show');
                        targetEl.style.opacity = '1';
                        targetEl.style.transform = 'translateY(0) scale(1)';
                    }, 50);
                }
            });
        }
    });
});