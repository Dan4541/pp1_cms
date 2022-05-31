<div class="row py-2" style="background-color: #1b1c2e">
    <div class="col-2 mx-4">
        <a href="{{ route('paginas.index') }}" {{ $attributes->merge(['class' => 'btn']) }}>{{$slot}}</a>
    </div>
</div>