<?php
namespace AT\RestfulApi;


(new AllowCors)->init();
header(header: "Content-Type: application/json");
