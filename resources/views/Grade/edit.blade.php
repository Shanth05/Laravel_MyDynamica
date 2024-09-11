<x-layout>
  <h1 style="color: white;">Edit grade</h1>
  <form Action="/grades/{{$grade->id}}" method="post" style="background-color: #343A40; color: white; padding: 20px; border-radius: 5px;">
      @csrf
      @method('put')
      <label for="grade_name">GradeName</label>
      <input type="text" name="grade_name" id="grade_name" value="{{$grade->grade_name}}" style="background-color: #212529; color: white; border: 1px solid #CED4DA;">
      <br><br>
      <label for="grade_order">GradeOrder</label>
      <input type="text" name="grade_order" id="grade_order" value="{{$grade->grade_order}}" style="background-color: #212529; color: white; border: 1px solid #CED4DA;">
      <br><br>
      <label for="grade_group">Grade group</label>
      <input type="text" name="grade_group" id="grade_group" value="{{$grade->grade_group}}" style="background-color: #212529; color: white; border: 1px solid #CED4DA;">
      <br><br>
      <label for="grade_color">Grade Color</label>
      <select id="grade_color" name="grade_color" style="background-color:#212529; color:white; border:1px solid #CED4DA;">
          @foreach ($grade as $k => $v )
          <option value="{{$k}}" {{ ($k==$grade->grade_color) ? "selected" : "" }}>{{$v}}</option>
          @endforeach
      </select>
      <br><br>
      <input type="submit" value="Update" style="background-color: #007BFF; color: white; border: none; padding: 10px 20px; border-radius: 5px;">
  </form>
</x-layout>