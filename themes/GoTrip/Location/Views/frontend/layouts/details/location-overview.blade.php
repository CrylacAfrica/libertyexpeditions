<div class="row y-gap-20 pt-40">
    <div class="col-auto">
        @php
            $excludedNames = [
                'detox and wellness',
                'masai mara balloon safari',
                'masai culture experience',
                'wildebeest migration',
            ];
        @endphp

        <h2 class="">
            @if(in_array(strtolower($translation->name), $excludedNames))
                {{ __("What to know about :text", ['text' => $translation->name]) }}
            @else
                {{ __("What to know before visiting :text", ['text' => $translation->name]) }}
            @endif
        </h2>
    </div>
    <p class="text-15 text-dark-1">
        {!! clean($translation->content) !!}
    </p>
</div>

