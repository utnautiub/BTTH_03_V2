<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Author Management</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   </head>
   <body>

      <?php include "{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/views/share/header.php"; ?>
      <div class="menu min-vh-100 p-5 bg-warning">
            <a class="btn btn-success mb-3" href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/CSE485_0923/BTTH_03_V2/app/views/Admin/insertAuthor.php">Add</a>
            <?php
               if(isset($_GET['mes'])){
               echo "<div id='alert' class='alert alert-{$_GET['type']}'>{$_GET['mes']}</div>";
               }
            ?>
         <table class="table text-center">
               <thead>
                  <tr>
                     <th scope="col">ID</th>
                     <th scope="col">Author Name</th>
                     <th scope="col">Edit</th>
                     <th scope="col">Delete</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     foreach ($data as $row):
                        $id = $row->getId();
                        $authorName = $row->getAuthorName();
                        $json_token = json_encode(["id" => $id, "authorName" => $authorName]); ?>
                        <tr>
                           <td scope="row"><?= $id ?></td>
                           <td scope="row"><?= $authorName ?></td>
                           <td scope="row">
                              <a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/CSE485_0923/BTTH_03_V2/app/views/Admin/editAuthor.php?token=<?= urlencode($json_token); ?>">
                                 <i class="fa-solid fa-pen-to-square"></i>
                              </a>
                           </td>
                           <td scope="row">
                              <button class="border-0 color-sucess" data-bs-toggle="modal" data-bs-target="#modalId<?= $id; ?>">
                                 <i class="fa-solid fa-trash"></i>
                              </button>
                           </td>
                        </tr>
                           <!-- Modal Body -->
                           <div class="modal fade" id="modalId<?= $id; ?>" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                    <div class="modal-content">
                                       <div class="modal-header">
                                             <h5 class="modal-title" id="modalTitleId">Thông báo</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                             Bạn có chắc chắn muốn xóa TÁC GIẢ:  <?=$authorName?> này không?
                                       </div>
                                       <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                             <a href=
                                                "<?php $_SERVER['DOCUMENT_ROOT'] ?>/CSE485_0923/BTTH_03_V2/public/index.php?controller=Admin&action=DeleteAuthor&id=<?=$id?>"
                                                class="btn btn-primary">Xác nhận
                                             </a>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                     <?php endforeach ?>
               </tbody>
         </table>
         <nav aria-label="Page navigation example">
            <ul class="pagination">
               <li class="page-item"><a class="page-link" href="#">Previous</a></li>
               <li class="page-item"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">3</a></li>
               <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
         </nav>
      </div>
      <?php include "{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/views/share/footer.php"; ?>
      <script>
        setTimeout(() => {
         if (document.querySelector("#alert")) {
            document.querySelector("#alert").style.display = "none";
            location.href = location.origin + location.pathname + "?action=authorManagement";
            }
         }, 2000);
      </script>
   </body>
   </html>