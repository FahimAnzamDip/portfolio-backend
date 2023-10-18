<div>
    <form wire:submit="update" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4">
                    <label for="logo">Logo <span class="text-danger">*</span></label>
                    <img width="300" class="img-thumbnail rounded d-block mt-2" src="{{ $logo ? $logo->temporaryUrl() : $logo_url }}" alt="About Image">
                    <div wire:loading wire:target="logo" class="text-primary mt-1 fw-bold">Uploading...</div>
                    <input wire:model="logo" type="file" name="logo" id="logo" class="w-100 mt-4 form-control">
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    <label for="about_image">About Image <span class="text-danger">*</span></label>
                    <img width="300" class="img-thumbnail rounded d-block mt-2" src="{{ $about_image ? $about_image->temporaryUrl() : $about_image_url }}" alt="Logo">
                    <div wire:loading wire:target="about_image" class="text-primary mt-1 fw-bold">Uploading...</div>
                    <input wire:model="about_image" type="file" name="about_image" id="about_image" class="w-100 mt-4 form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="name">Name <span class="text-danger">*</span></label>
                    <input wire:model="name" type="text" class="form-control" id="name" name="name">
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="designation">Designation <span class="text-danger">*</span></label>
                    <input wire:model="designation" type="text" class="form-control" id="designation" name="designation">
                    @error('designation')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="email">Email <span class="text-danger">*</span></label>
                    <input wire:model="email" type="email" class="form-control" id="email"  name="email">
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div wire:ignore>
                    <label for="about_content">About Content</label>
                    <textarea wire:model="about_content" name="about_content" id="about_content" class="form-control"></textarea>
                </div>
                @error('about_content')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-md-3">
                <div class="mb-4">
                    <label for="whatsapp">Whatsapp</label>
                    <input wire:model="whatsapp" type="text" class="form-control" id="whatsapp" name="whatsapp">
                    @error('whatsapp')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <label for="facebook">Facebook</label>
                    <input wire:model="facebook" type="text" class="form-control" id="facebook" name="facebook">
                    @error('facebook')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <label for="linkedin">Linkedin</label>
                    <input wire:model="linkedin" type="text" class="form-control" id="linkedin"  name="linkedin">
                    @error('linkedin')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-3">
                <div class="mb-4">
                    <label for="twitter">Twitter</label>
                    <input wire:model="twitter" type="text" class="form-control" id="twitter"  name="twitter">
                    @error('twitter')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <label for="resume_link">Resume Link</label>
                    <input wire:model="resume_link" type="text" class="form-control" id="resume_link"  name="resume_link">
                    @error('resume_link')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <label for="location">Location</label>
                    <input wire:model="location" type="text" class="form-control" id="location"  name="location">
                    @error('location')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary d-inline-flex align-items-center">
                    <span class="me-2">Save Changes</span>
                    <i class="bi bi-check2-circle"></i>
                </button>
            </div>
        </div>
    </form>
</div>

@push('page_css')

@endpush

@push('page_js')
    <!-- tinymce js -->
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#about_content',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });

                editor.on('blur', function (e) {
                    @this.set('about_content', editor.getContent());
                });
            },
        });
    </script>
@endpush
