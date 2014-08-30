<?php 
$output = '';
if ($this->session->flashdata('success'))
{
    foreach ((array) $this->session->flashdata('success') as $message)
    {
        $output .= '<div class="alert alert-dismissable alert-success">' . $message . '</div>';
    }
}

if ($this->session->flashdata('notice'))
{
    foreach ((array) $this->session->flashdata('notice') as $message)
    {
        $output .= '<div class="alert alert-dismissable alert-info">' . $message . '</div>';
    }
}

if ($this->session->flashdata('error'))
{
    foreach ((array) $this->session->flashdata('error') as $message)
    {
        $output .= '<div class="alert alert-dismissable alert-danger">' . $message . '</div>';
    }
}

echo $output;
?>