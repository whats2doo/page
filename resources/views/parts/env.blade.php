@if(app()->environment() !== 'prod' || app()->environment() !== 'production')
    <div id="env">{{ app()->environment() }}</div>
@endif