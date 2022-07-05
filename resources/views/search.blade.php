@extends('main_layouts.master')
@section('search')
    <a class="nav-link dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        Tìm kiếm
    </a>

    <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
        <li>
            <div class="input-group mt-2 mx-2">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control-dropdown" />
                    <label class="form-label" for="form1">Search</label>
                </div>
            </div>
        </li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        @forelse($recent_posts as $post)
            <li><a class="dropdown-item" href="#">{{$post->slug}}</a></li>
        @empty
            <Li>Bạn cần tìm gì</Li>
        @endforelse
    </ul>
@endsection
@section('custom_js')
<script>
    const searchInputDropdown = document.getElementById('search-input-dropdown');
    const dropdownOptions = document.querySelectorAll('.input-group-dropdown-item');

    searchInputDropdown.addEventListener('input', () => {
        const filter = searchInputDropdown.value.toLowerCase();
        showOptions();
        const valueExist = !!filter.length;

        if (valueExist) {
            dropdownOptions.forEach((el) => {
                const elText = el.textContent.trim().toLowerCase();
                const isIncluded = elText.includes(filter);
                if (!isIncluded) {
                    el.style.display = 'none';
                }
            });
        }
    });

    const showOptions = () => {
        dropdownOptions.forEach((el) => {
            el.style.display = 'flex';
        })
    }
</script>
@endsection