<form method="POST" action="{{ route('teams.store') }}">
    @csrf
    Name:
    <br />
    {{-- TASK: change this field so it would contain old value after validation error --}}
    <input type="text"  value="{{ old('name') }}"  name="name" class="@error('name', 'post') is-invalid @enderror"/>

    
    <br /><br />
    <button type="submit">Save</button>
</form>
