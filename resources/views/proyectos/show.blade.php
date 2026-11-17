<x-layout :titulo="'Vista detalle proyecto ' . $id">
@isset($proyectos[$id])
    <ul class="grid gap-4 sm:grid-cols-2">
        <x-tarjeta-proyecto :proyecto="$proyectos[$id]" :id="$id" />
    </ul>
@endisset
</x-layout>
