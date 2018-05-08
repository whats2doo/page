@if(app()->environment() !== 'prod')
    <div id="env">{{ app()->environment() }}</div>
@endif