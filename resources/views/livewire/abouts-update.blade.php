<div>
    <form wire:submit="update">
        <div class="row">
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

@push('page_js')
    <!-- tinymce js -->
    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#about_content',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            // All your init stuff here, then the super important part at the bottom
            setup: function (editor) {
                editor.on('init change', function () {
                    editor.save();
                });

                // This section says that when you leave the text edit area, it will set whatever livewire variable you like to the currnt contents
                editor.on('blur', function (e) {
                    @this.set('about_content', editor.getContent());
                });
            },
        });
    </script>
@endpush
