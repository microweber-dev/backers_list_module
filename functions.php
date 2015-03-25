<?php

function get_backers($params = array())
{
    if (is_string($params)) {
        $params = parse_params($params);
    }
    $params['table'] = "backers_list";
    return db_get($params);
}

api_expose_admin('save_backer');
function save_backer($data)
{
    $table = "backers_list";
    return db_save($table, $data);
}

api_expose_admin('delete_backer');
function delete_backer($params)
{
    if (isset($params['id'])) {
        $table = "backers_list";
        $id = $params['id'];
        return db_delete($table, $id);
    }
}