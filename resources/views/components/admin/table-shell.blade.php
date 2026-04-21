@props([
    'paginator' => null,
])

<section class="rounded-2xl border border-slate-200 bg-white shadow-sm">
    <div class="overflow-x-auto">
        {{ $slot }}
    </div>

    @if ($paginator)
        <div class="border-t border-slate-100 px-4 py-3">
            {{ $paginator->links() }}
        </div>
    @endif
</section>