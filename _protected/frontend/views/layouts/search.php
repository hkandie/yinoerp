<?php


use kartik\widgets\Select2;

$us_states = ["Select", "all" => "All Elements", "address" => "Address", "ap_payment_header" => "AP Payment", "ap_transaction_header" => "AP Invoice", "ar_transaction_header" => "AR Invoice", "ar_receipt_header" => "AR Receipt", "mdm_bank_header" => "Bank", "bc_label_format_header" => "Barcode", "bom_header" => "Bills Of Material", "cc_co_header" => "Change Order", "ar_customer" => "Customer", "gl_calendar" => "GL Calendar", "gl_journal_header" => "Journal", "inv_transaction" => "Inventory Transactions", "item" => "Item", "org" => "Org", "po_header" => "Purchase Order", "inv_receipt_header" => "PO Receipt", "all_bom_routing_v" => "Routing", "sd_so_header" => "Sales Order", "sd_delivery_header" => "Sales Delivery", "supplier" => "Supplier", "user" => "User"];


$search=Select2::widget([
    'name' => 'search_document_list[]',
    'data' => $us_states,
    'size' => Select2::LARGE,
]);
echo $search;

