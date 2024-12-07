@extends('landingpage/layouts.main')

<style>    
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
    }
</style>

@section('container')
    <section style="padding: 0px;">
            <header class="section-header transparent-background">
                <h2 class="hero-title" style="height: 100px;  display: flex; justify-content: center; align-items: center; text-align: center;">News & Event</h2>
                <h4>Keeping You Updated with the Latest News and Information on All Our Events and Initiatives</h4>
                <!-- <p>Terimakasih Telah Memberikan Kepercayaan Kepada Kami</p> -->
            </header>
            <main class="container" data-aos="fade-up" style="margin-bottom: 100px;">
                <div class="table-responsive">
                <table class="table table-bordered" id="tablenews" width="100%" cellspacing="0" style="border: none">
                    <thead>
                        <tr>
                            <th style="width: 200px;"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $post)
                        <tr>
                            <td>
                                <div>
                                    @if ($post->image)
                                        <img style="width: 100%;" height="150px;" src="{{ asset('storage/' . $post->image) }}" alt="Card image">
                                    @else
                                        <img src="https://source.unsplash.com/200x200?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                                    @endif
                                </div>    
                            </td>
                            <td>
                                <div style="background-color: white; font-weight: bold;">
                                    <a class="" href="/news-events/{{ $post->slug }}">{{ $post->title }}</a>
                                </div>
                                <br>
                                <div >{{ $post->excerpt }}</div>    
                                <br>
                                <span><i class="bi bi-tag"></i></span>
                                {{ $post->category->name }}
                            </td>
                         </tr>    
                        @endforeach
                    </tbody>
                </table>   
                </div>             
            </main>
    </section>

    <script>
        $(document).ready(function () {
    $('#tablenews').DataTable({
        paging: true, // Enable pagination
        // pageLength: 5, // Number of rows per page
        // lengthMenu: [5, 10, 25, 50], // Options for rows per page
        searching: true, // Disable search if not needed
        ordering: false // Disable column sorting if not needed
    });
});

    </script>

@endsection
<!-- End Clients Section -->
