@section('optionButton')
    <select class="form-select btn-outline-secondary" name="option" id="exampleFormControlSelect1"
        aria-label="Select Your code platform/Language">
        @if (isset($option))
            <option value="General" {{ $option == 'General' ? 'selected' : '' }}>General</option>
            <option value="Laravel" {{ $option == 'Laravel' ? 'selected' : '' }}>Laravel</option>
            <option value="SQL" {{ $option == 'SQL' ? 'selected' : '' }}>SQL</option>
            <option value="Django" {{ $option == 'Django' ? 'selected' : '' }}>Django</option>
        @else
            <option value="General">General</option>
            <option value="Laravel">Laravel</option>
            <option value="SQL">SQL</option>
            <option value="Django">Django</option>
        @endif

    </select>
@endsection
