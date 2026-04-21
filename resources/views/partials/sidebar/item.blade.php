@php
    $label = $label ?? '';
    $href = $href ?? null;
    $active = $active ?? false;
    $icon = $icon ?? 'square';
    $badge = $badge ?? null;
    $disabled = $disabled ?? false;
    $title = $title ?? null;

    $isDisabled = $disabled || empty($href);

    $baseClasses = 'group flex w-full items-center justify-between rounded-xl px-4 py-3 text-sm font-medium transition';
    $activeClasses = 'bg-white/15 text-white shadow-sm';
    $inactiveClasses = 'text-slate-200 hover:bg-white/10 hover:text-white';
    $disabledClasses = 'cursor-not-allowed text-slate-400 opacity-80';

    $contentClasses = $baseClasses . ' ' . (
        $isDisabled
            ? $disabledClasses
            : ($active ? $activeClasses : $inactiveClasses)
    );
@endphp

@if ($isDisabled)
    <span class="{{ $contentClasses }}" @if ($title) title="{{ $title }}" @endif>
        <span class="flex min-w-0 items-center gap-3">
            <span class="shrink-0">
                @switch($icon)
                    @case('home')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 3l9 7.5" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 9.75V21h13.5V9.75" />
                        </svg>
                        @break
                    @case('calendar')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 9h18" />
                            <rect x="3" y="5" width="18" height="16" rx="2" />
                        </svg>
                        @break
                    @case('clipboard')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="8" y="3" width="8" height="4" rx="1" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                        </svg>
                        @break
                    @case('users')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                            <circle cx="9.5" cy="7" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 0 0-3-3.87" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 3.13A4 4 0 0 1 16 10.87" />
                        </svg>
                        @break
                    @case('shield')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 3v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-3Z" />
                        </svg>
                        @break
                    @case('key')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="8" cy="15" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15h9M18 12v6M21 13.5v3" />
                        </svg>
                        @break
                    @default
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                @endswitch
            </span>

            <span class="truncate">{{ $label }}</span>
        </span>

        @if (!is_null($badge))
            <span class="ml-3 inline-flex min-w-6 items-center justify-center rounded-full bg-white/10 px-2 py-0.5 text-xs font-semibold text-slate-200">
                {{ $badge }}
            </span>
        @endif
    </span>
@else
    <a href="{{ $href }}" class="{{ $contentClasses }}" @if ($active) aria-current="page" @endif>
        <span class="flex min-w-0 items-center gap-3">
            <span class="shrink-0">
                @switch($icon)
                    @case('home')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10.5 12 3l9 7.5" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 9.75V21h13.5V9.75" />
                        </svg>
                        @break
                    @case('calendar')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4M16 2v4M3 9h18" />
                            <rect x="3" y="5" width="18" height="16" rx="2" />
                        </svg>
                        @break
                    @case('clipboard')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="8" y="3" width="8" height="4" rx="1" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 5H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2" />
                        </svg>
                        @break
                    @case('users')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2" />
                            <circle cx="9.5" cy="7" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 21v-2a4 4 0 0 0-3-3.87" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 3.13A4 4 0 0 1 16 10.87" />
                        </svg>
                        @break
                    @case('shield')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3l7 3v6c0 5-3.5 8-7 9-3.5-1-7-4-7-9V6l7-3Z" />
                        </svg>
                        @break
                    @case('key')
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="8" cy="15" r="4" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15h9M18 12v6M21 13.5v3" />
                        </svg>
                        @break
                    @default
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                @endswitch
            </span>

            <span class="truncate">{{ $label }}</span>
        </span>

        @if (!is_null($badge))
            <span class="ml-3 inline-flex min-w-6 items-center justify-center rounded-full bg-white/10 px-2 py-0.5 text-xs font-semibold text-slate-200">
                {{ $badge }}
            </span>
        @endif
    </a>
@endif