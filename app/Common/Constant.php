<?php

namespace App\Common;

class Constant
{
    // Map with mst_code has code is 28
    public const USER_TYPE_COMPANY = 1;

    public const CODE_OK                   = 200;
    public const CODE_NO_CONTENT           = 204;
    const        CODE_FAILED               = 500;
    const        CODE_ACCESS_DENIED        = 403;
    const        CODE_API_DATA_NOT_FOUND   = 401;
    const        PDF_SIZE_MAX              = 204800;
    const        FILE_SIZE_MAX             = 204800; // Fixme
    const        UNPROCESSABLE_ENTITY_CODE = 422;
    const        NOT_FOUND_CODE            = 404;
    const        PDF_ID                    = 5;
    const        REMEMBER_LOGIN_TIMEOUT    = 30;
}
