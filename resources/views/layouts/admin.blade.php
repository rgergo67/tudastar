<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta property="og:site_name" content="Beosztom.hu">
        <meta property="og:url" content="{{ request()->fullUrl() }}">
        <meta property="og:type" content="article">
        <meta property="og:image" content="/images/fb_cover.jpg">

        @sectionMissing('seo')
            <x-seo title="Oszd be a pénzed egyszerűen"
                   description="Csökkentsd az impulzus vásárlásaid, költekezz tudatosan, spórolj hatékonyan!" />
        @endif

        @yield('seo')

        <x-favicon />

        <x-serviceworker />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        <noscript>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;800&display=swap">
        </noscript>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @stack('template_linked_css')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                <x-public-navigation />
                <div class="min-h-screen pt-24 bg-gray-100">
                    <div class="max-w-7xl mx-auto py-6">
                        {{ $slot }}
                    </div>
                </div>
            </main>
        </div>

        <!-- Scripts -->
        @stack('footer-scripts')
        <x-google-analytics />
        <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            let token = document.head.querySelector('meta[name="csrf-token"]');

            if (token) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': token.content
                    }
                });
            } else {
                console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
            }

            function uploadTinyMceImageContent(blobInfo, success, failure, progress) {
                var data = new FormData();
                data.append('image', blobInfo.blob(), blobInfo.filename());
                $.ajax({
                    url: '{{ route('tinymce_upload') }}',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: 'post',
                    success: function(url) {
                        success(url);
                    },
                    error: function(data) {
                        failure('Hiba: ' + xhr.status, { remove: true });
                        return;
                    }
                });
            }

            tinymce.init({
                selector: '.tinymce-textarea',
                plugins: 'preview paste importcss searchreplace autolink autosave save code visualblocks visualchars fullscreen image link media codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists imagetools textpattern noneditable help charmap quickbars emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                codesample_languages: [
                    { text: 'Bash', value: 'bash' },
                    { text: 'Apache config', value: 'apacheconf' },
                    { text: 'Ini config', value: 'ini' },
                    { text: 'PHP', value: 'php' },
                    { text: 'HTML/XML', value: 'markup' },
                    { text: 'JavaScript', value: 'javascript' },
                    { text: 'CSS', value: 'css' },
                    { text: 'Python', value: 'python' },
                    { text: 'Perl', value: 'perl' },
                ],
                menubar: 'file edit view insert format tools table help',
                toolbar: 'undo redo | bold italic underline strikethrough | insertfile image media template link anchor codesample | formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | removeformat | pagebreak | charmap emoticons | fullscreen  preview',
                toolbar_sticky: true,
                autosave_ask_before_unload: true,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                image_advtab: true,
                importcss_append: true,
                automatic_uploads: true,
                file_picker_types: 'image',
                file_picker_callback: function (callback, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                },
                images_upload_handler: uploadTinyMceImageContent,
                images_reuse_filename: true,
                images_upload_credentials: true,
                relative_urls : false,
                remove_script_host : false,
                convert_urls : true,
                height: 600,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quicktable',
                quickbars_insert_toolbar: '',
                noneditable_noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                contextmenu: false,
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                entity_encoding : "raw"
            });
        </script>
    </body>
</html>
