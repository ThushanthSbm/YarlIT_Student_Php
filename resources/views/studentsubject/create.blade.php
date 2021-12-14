<form action="{{route('studentSubjects.store')}}" method="post" >
            @csrf


                <input type="text" name="studentid" value="{{$studentid}}">


                <label>Subject: </label>

                @foreach($subjects as $subject)

                <div class="form-check">
                    <input  type="checkbox" id="  {{ $subject->id }}" name="subject[]" value="  {{ $subject->id }}" <?php
                                                                                                                                            foreach ($studentSubjects as $stuSubject) {
                                                                                                                                                if ($subject->subject_name == $stuSubject->subject_name) {
                                                                                                                                                    echo "checked";
                                                                                                                                                }
                                                                                                                                            }

                                                                                                                                            ?>>
                    <label  for="{{ $subject->id }}">
                        {{ $subject->subject_name }}
                    </label>
                </div>

                @endforeach

              
<input  type="submit" value="save" >
               


            
        </form>
        <a href="{{route('studentSubjects.show', $studentid)}}" >Show Subject</a>
