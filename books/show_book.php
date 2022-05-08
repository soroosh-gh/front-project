<h1>کتاب ها</h1>
<?php
if(count($books) == 0)
{
    echo "no book!";
}else
{
    foreach($books as  $book)
    {
        //var_dump($book);
        include 'template/card.php';
    }
}
?>