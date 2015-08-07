<?php
class model
{
    
    public function __construct()
    {
        # code...
    }

    public function open_database_connection()
    {
        $link = mysql_connect('localhost', 'root', 'root');
        mysql_select_db('test', $link);

        return $link;
    }

    public function close_database_connection($link)
    {
        mysql_close($link);
    }

    public function get_all_posts()
    {
        $link = $this->open_database_connection();

        $result = mysql_query('SELECT id, title FROM post', $link);
        $posts = array();
        while ($row = mysql_fetch_assoc($result)) {
            $posts[] = $row;
        }
        $this->close_database_connection($link);

        return $posts;
    }

    public function get_post_by_id($id)
    {
        $link = $this->open_database_connection();

        $id = intval($id);
        $query = 'SELECT date, title, body FROM post WHERE id = '.$id;
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);

        $this->close_database_connection($link);

        return $row;
    }
}
