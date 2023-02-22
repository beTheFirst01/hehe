<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <form method="POST" action="{{ route('admin.store') }}">
        @csrf
        <div class="mb-6">
            <label class="block">
                <span class="text-gray-700">Name</span>
                <input type="text" name="name"
                    class="block w-full @error('title') border-red-500 @enderror mt-1 rounded-md" placeholder=""
                    value="{{old('name')}}" />
            </label>
            @error('name')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <label for="harga">harga</label>
        <input type="number" name="harga" id="harga">

        <div class="mb-6">
            <label class="block">
                <span class="text-gray-700">Tag</span>
                <select name="tag[]" class="block w-full mt-1" multiple>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </label>
        </div>
        
        <div class="mb-6">
            <label class="block">
                <span class="text-gray-700">Body</span>
                <textarea class="block w-full mt-1 rounded-md " name="body"
                    rows="3">{{old('description')}}</textarea>
            </label>
            @error('body')
            <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
    
    </form>


    <br><br><br><b></b>


                <table class="table table-striped">
                    
                    <tr>
                        <th>nama</th>
                        <th>tag</th>
                        <th>body</th>
                    </tr>
                    <tr>

                    @foreach ($homestays as $homestay)

                    <td>{{ $homestay->name }}</td>
                    <td>
                        @foreach ($homestay->tag as $tag)
                       {{ $tag->name }}<span>, </span>
                        {{-- {{ (explode(", " , $homestay->tag()->id)) }} --}}
                        @endforeach
                    </td>
                    <td>{{ $homestay->body }}</td>
                </tr>

                    @endforeach
                  </table>

    <br><br><br><br><br><br>

    <div class="container-md justify-content-center">
        <div class="col-8">

            <form action="{{ route('ngebooking') }}" method="post">
                @csrf
                <input type="number" name="jumlah"><br>
                <input type="date" name="start"><br>
                <input type="date" name="end"><br>


               
            <button type="submit" class="btn btn-primary">
                Booking
            </button>
            </form>
            
        </div>
    </div>



    <br><br><br><br><br><br>

    <table class="table table-stripped">
        <tr>
        <th>name</th>
        <th>homestay</th>
        <th>jumlah orang</th>
        <th>total</th>
        <th>status</th>
        <th>mulai</th>
        <th>berakhir</th>
    </tr>
    @foreach($bookings as $booking)
    <tr>
        <td>{{ $booking->name }}</td>
        <td>{{ $booking->homestay }}</td>
        <td>{{ $booking->jumlah }}</td>
        <td>{{ $booking->total }}</td>
        <td>{{ $booking->status }}</td>
        <td>{{ $booking->end }}</td>
        <td>{{ $booking->start }}</td>
    </tr>
    @endforeach
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>