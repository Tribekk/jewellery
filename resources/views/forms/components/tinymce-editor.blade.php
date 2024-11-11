<div wire:ignore>
    <textarea x-data x-init="tinymce.init({
        selector: '#{{ $getId() }}',
        plugins: 'link image code',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code',
        setup: (editor) => {
            editor.on('Change', () => {
                $dispatch('input', editor.getContent())
            });
        }
    })" id="{{ $getId() }}" {!! $attributes->merge(['class' => 'block w-full']) !!}>{{ $getState() }}</textarea>
</div>
