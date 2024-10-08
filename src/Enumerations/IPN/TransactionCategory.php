<?php

namespace GoSuccess\Digistore24\Enumerations\IPN;

enum TransactionCategory: string
{
    case Orders = 'orders';
    case Affiliations = 'affiliations';
    case Etickets = 'etickets';
    case Customforms = 'customforms';
    case Orderform = 'orderform';
}
