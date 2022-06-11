<?php

use App\Models\QuestionCategoryModel;
use App\Models\QuestionQueueModel;
?>

<style>
    .btn-question-detail {
        width: 100px;
    }
</style>

<div class="container">

    <div class="card mt-3">
        <div class="card-header">
            <h4>Quản lý đơn hàng</h4>

        </div>
        <div class="card-body">


            <table id="table_quecate" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID Đơn hàng</th>
                        <th scope="col">ID Khách hàng</th>
                        <th scope="col">Tình trạng</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Ngày cập nhật</th>
                    </tr>
                </thead>


                <tbody>

                    <?php

                    // foreach ($data[0]  as $qq) {
                    //     echo ' <tr>';
                    //     echo "<td>$qq[que_id] </td>";
                    //     echo "<td>$qq[que_title] </td>";

                    //     echo "<td>$qq[createdAt] </td>";
                    //     echo "<td>$qq[user_id] </td>";
                    //     echo "<td>$qq[que_cate_id] </td>";
                    //     echo "<td>$qq[is_accepted]                    
                    //     </td>";
                    //     echo "  <td class='d-flex'>
                    //     <a href='/admin?action=question-detail&que_id=$qq[que_id]&is_accepted=$qq[is_accepted]'  class='btn btn-question-detail btn-warning mx-2'>Chi tiết</a>
                    //     <a class='btn btn-danger btn-question-delete btn-delete' id='$qq[que_id]'>Xóa</a>
                    //     </td>";
                    //     echo "</tr>";
                    // }

                    ?>



                </tbody>
            </table>
        </div>
    </div>


</div>