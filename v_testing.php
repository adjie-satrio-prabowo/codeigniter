<!DOCTYPE html>
<html>
   <head>
      <style>
         table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 100%;
         }
         td, th {
         border: 1px solid #dddddd;
         text-align: left;
         padding: 8px;
         }
         tr:nth-child(even) {
         background-color: #dddddd;
         }
      </style>
   </head>
   <body>
   
      <table  class="table table-bordered">
         <thead>
            <tr>
              <?php  foreach($tablehead->result() as $thead):?>
               <th><?php echo  $thead->column_name;?></th>
              <?php  endforeach;?>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
           <?php  $no=1;foreach($data->result() as $dt):?>
            <tr>
              <?php  foreach($tablehead->result_array()  as $item): $nv=$item['column_name'];?>
               <td><?php echo  $dt->$nv;?></td>
              <?php  endforeach;?>
               <td>
                  <div align='center'>
                     <form action="#"  method='POST'>
                        <input type='hidden' name='id' value="<?php echo  $dt->id;?>">
                        <button type='submit'  onclick="return confirm('Apakah ingin menghapus?');">x</button>
                     </form>
                  </div>
               </td>
            </tr>
           <?php  endforeach;?>
         </tbody>
      </table>
   </body>
</html>