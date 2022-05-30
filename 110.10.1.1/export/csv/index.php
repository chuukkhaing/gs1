<?php
include("../../../../regs1/connection.php");
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');
$output = fopen("php://output", "w");
fputcsv($output, array('No', 'Company Name', 'Company Address', 'Street Address', 'Address', 'City', 'State/Region', 'Postal/Zip Code', 'Country', 'Phone', 'Email', 'Company License No', 'Website', 'Member', 'First Person Name', 'First Person Email', 'First Person Phone', 'Email for Activate', 'Second Person Name', 'Second Person Email', 'Second Person Phone', 'Personal Data Agreement'));
$query = "SELECT company_information.id, company_information.company_name, company_information.company_address, company_information.street_address, company_information.address, company_information.city, company_information.state_region, company_information.postal_zip_code, company_information.country, company_information.phone, company_information.email, company_information.company_license_no, company_information.website, company_information.member, contact_person_information.first_person_name, contact_person_information.first_person_email, contact_person_information.first_person_phone, contact_person_information.email_for_activate, contact_person_information.second_person_name, contact_person_information.second_person_email, contact_person_information.second_person_phone, contact_person_information.personal_data_agreement FROM company_information INNER JOIN contact_person_information ON company_information.company_code=contact_person_information.company_code";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_assoc($result))
{
  fputcsv($output, $row);
}
fclose($output);
?>
