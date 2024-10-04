<div class="flex justify-center mt-4">
    <div class="flex justify-between w-8/12 p-4 rounded-md shadow-md bg-slate-200">
        @foreach ($tasksByStatus as $status)
            <div class="flex flex-col items-center justify-center">
                <span @class([
                    'w-16 h-16 flex justify-center items-center rounded-full text-lg text-black border-2',
                    $status->status->color() => $status->status,
                ])>
                    {{ $status->count }}
                </span>
                <span>{{ Str::of($status->status->value)->headline() }}</span>
            </div>
        @endforeach
    </div>
</div>
