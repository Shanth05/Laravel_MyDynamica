<x-layout>

    <h2>Registration</h2>
    <br>
    <form action="/subjects" method="post">


        @csrf
        <div>
            <label type="subject_name">Subject Name</label>
            <input type="text" id="subject_name" name="subject_name">
        </div>
        <br>

        <div>
            <label type="subject_order">Subject Order</label>
            <input type="text" id="subject_order" name="subject_order">
            <br>
        </div>

        <div>
            <label type="color">Subject Color</label>
            <input type="text" id="color" name="color">
            <br>
        </div>

        {{-- <br>
        <div>
            <label for="grade_id">Grade Id</label>
            <select id="grade_id" name="grade_id">
                @foreach ($grades as $k => $v)
                    <option value="{{ $k }}">{{ $v }}</option>
                @endforeach
            </select>
        </div>
        <br> --}}


        <input type="submit" class="btn btn-primary">
        
    </form>
