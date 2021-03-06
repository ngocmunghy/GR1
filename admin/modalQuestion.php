<div class="modal" tabindex="-1" role = "dialog" id = "mdlQuestion">
  <div class="modal-dialog" role = "document">
    <div class="modal-content">
      <div class="modal-body">
        <input type="hidden" id="txtQuestionId">
        <div class="mb-3">
          <label for="question-area" class="form-label">Question</label>
          <textarea class="form-control" id="question-area" rows="3" placeholder="Input new question here ..."></textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptA" class="form-label">Option A</label>
          <textarea class="form-control" id="txtOptA" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptB" class="form-label">Option B</label>
          <textarea class="form-control" id="txtOptB" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptC" class="form-label">Option C</label>
          <textarea class="form-control" id="txtOptC" rows="1"></textarea>
        </div>
        <div class="mb-3">
          <label for="txtOptA" class="form-label">Option D</label>
          <textarea class="form-control" id="txtOptD" rows="1"></textarea>
        </div>

        <div class = "form-group">
          <label class="form-label">Correct answer</label>
          <div class="row">

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" id="optA" name="ans"> Option A
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" id="optB" name="ans"> Option B
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" id="optC" name="ans"> Option C
                </label>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="radio">
                <label>
                  <input type="radio" id="optD" name="ans"> Option D
                </label>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnSubmit">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
  $('#btnSubmit').click(function() {
    let question  = $('#question-area').val();
    let optA      = $('#txtOptA').val().trim();
    let optB      = $('#txtOptB').val().trim();
    let optC      = $('#txtOptC').val().trim();
    let optD      = $('#txtOptD').val().trim();
    let ans       = '';
    if(document.getElementById('optA').checked) {
      ans = 'A';
    } else if(document.getElementById('optB').checked) {
      ans = 'B';
    } else if(document.getElementById('optC').checked) {
      ans = 'C';
    } else if(document.getElementById('optD').checked) {
      ans = 'D';
    }

    if(question == "" || optA == "" || optB == "" || optC == "" || optD == "") {
      alert("Vui l??ng nh???p ?????y ????? c??u h???i v?? ????p ??n");
      return;
    }

    if(ans == "") {
      alert("Vui l??ng ch???n ????p ??n ????ng");
      return;
    }

    let questionId = $('#txtQuestionId').val();

    if(questionId.length == 0) {
      $.ajax({
        url: './add_question.php',
        type: 'post',
        data: {
          question: question,
          optA: optA,
          optB: optB,
          optC: optC,
          optD: optD,
          ans: ans
        },

        success: function(data) {
          alert(data);
          $('#mdlQuestion').modal('hide');
          readData($('txtSearch').val());
        }
      });
    } else {
      $.ajax({
        url: './edit_ques.php',
        type: 'post',
        data: {
          id:questionId,
          question: question,
          optA: optA,
          optB: optB,
          optC: optC,
          optD: optD,
          ans: ans
        },

        success: function(data) {
          alert(data);
          $('#mdlQuestion').modal('hide');
          readData($('txtSearch').val());
        }
      });
    }

  });
</script>