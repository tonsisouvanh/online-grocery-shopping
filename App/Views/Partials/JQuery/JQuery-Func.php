<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script>
    $("#txtSearchBar").keypress((event) => {
        const uri = window.location.href;
        const retURI = '/mini-q2a?action=question-queue';
        if (event.which == 13) {
            event.preventDefault();
            window.location.href = retURI + `&keyWord=${event.target.value}`;
        }
    });

    $(".btn-delete").click((event) => {
        $('<form method="POST">' +
            `<input type="text" name="queue_id" value='${event.target.id}' />` +
            '</form>').appendTo('body').submit();
    });

    $(".btn-delete-answer").click((event) => {
        $('<form method="POST">' +
            `<input type="text" name="answer_id" value='${event.target.id}' />` +
            '</form>').appendTo('body').submit();
    });
</script>

<?php

use App\Models\QuestionQueueModel;
use App\Models\AnswerModel;

if (isset($_POST['queue_id'])) {
    $value = $_POST['queue_id'];
    console_log('Delete question: ' . $value);
    $questionQueueModel = new QuestionQueueModel;
    $ret = $questionQueueModel->del($value);
    if ($ret == true) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Xóa thành công!',
            showConfirmButton: false,
            timer: 1500
          });
        </script>";


        echo "<script>
        
        setTimeout(() => {
            location.href='/admin?action=question'
        }, 1500);
     </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Xóa thất bại!',
            showConfirmButton: false,
            timer: 2000
          });
        </script>";
    }
}


if (isset($_POST['answer_id'])) {
    $value = $_POST['answer_id'];
    console_log('Delete answer: ' . $value);
    $answerModel = new AnswerModel;
    $ret = $answerModel->del($value);
    if ($ret == true) {
        echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Xóa thành công!',
            showConfirmButton: false,
            timer: 1500
          });
        </script>";


        echo "<script>
        
        setTimeout(() => {
            location.href='/admin?action=answer'
        }, 1500);
     </script>";
    } else {
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Xóa thất bại!',
            showConfirmButton: false,
            timer: 2000
          });
        </script>";
    }
}
?>