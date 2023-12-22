@extends('layouts.default')

@section('content')
    @include('partials.dashboardnavbar')

    <main class="my-20">
        <div class=" container my-0 mx-auto transition-all duration-200">
            <h1 class=" text-3xl font-bold mb-10 text-[#eb4432] transition-colors duration-200">
                My projects</h1>
            <ul class="gird grid-cols-4 gap-10">
                @forelse ($projects as $project)
                @empty
                    <li>No Projects found...</li>
                @endforelse
            </ul>
        </div>
    </main>


    <script async>
        const dropDownButton = document.getElementById('dropdownDefaultButton');
        const dropDown = document.getElementById('dropdown');
        let isDropDownOpened = false;

        dropDownButton.addEventListener('click', () => {
            if (!isDropDownOpened) {
                dropDown.classList.remove('hidden')
                isDropDownOpened = true;
            } else {
                dropDown.classList.add('hidden')
                isDropDownOpened = false;
            }
        })

        dropDown.addEventListener('mouseleave', () => {
            setTimeout(() => {
                dropDown.classList.add('hidden')
                isDropDownOpened = false;
            }, 300);
        })
    </script>
@endsection
