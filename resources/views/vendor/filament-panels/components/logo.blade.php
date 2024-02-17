@if(Route::current()->getName() === 'filament.admin.auth.login')
    <img src="{{asset('image/readme/logo479x118.png')}}"
         alt="{{config('app.name')}}"
         title="{{config('app.name')}}"
         width="310"
         class="mb-2"
    >
@else
    <img src="{{asset('image/readme/logo479x118.png')}}"
         alt="{{config('app.name')}}"
         title="{{config('app.name')}}"
         width="165"
         class="mb-2"
    >
@endif
