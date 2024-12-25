<?php
// Check if the form is submitted
$patientName = $phoneNumber = $symptoms = $date = $departmentName = $doctorName = '';
$isValid = true;
include('data.php');
// Handle the form submission (POST request)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $patientName = $_POST['patientName'] ?? '';
    $phoneNumber = $_POST['phoneNumber'] ?? '';
    $symptoms = $_POST['symptoms'] ?? '';
    $date = $_POST['date'] ?? '';
    $departmentName = $_POST['departmentName'] ?? '';
    $doctorName = $_POST['doctorName'] ?? '';
    // Validation
    if (!preg_match('/^[a-zA-Z]+$/', $patientName) || empty($patientName)) {
        $isValid = false;
        echo "Error: Name must not be numeric or empty.<br>";
    }

    if (!is_numeric($phoneNumber) || empty($phoneNumber)) {
        $isValid = false;
        echo "Error: Phone number must only contain numbers.<br>";
    }
  

    if (empty($symptoms)) {
        $isValid = false;
        echo "Error: Symptoms cannot be empty.<br>";
    }

    if (empty($date)) {
        $isValid = false;
        echo "Error: Date cannot be empty.<br>";
    }

    if (empty($departmentName)) {
        $isValid = false;
        echo "Error: Department cannot be empty.<br>";
    }

    if (empty($doctorName)) {
        $isValid = false;
        echo "Error: Doctor cannot be empty.<br>";
    }
    // If valid, redirect with data
    if ($isValid) {
      // You can store data in the session or directly pass data to another page (e.g., using header redirect)
      session_start();
      $_SESSION['patientName'] = $patientName;
      $_SESSION['phoneNumber'] = $phoneNumber;
      $_SESSION['symptoms'] = $symptoms;
      $_SESSION['date'] = $date;
      $_SESSION['departmentName'] = $departmentName;
      $_SESSION['doctorName'] = $doctorName;

      // Redirect to book-appointment.php to display the submitted data
      header("Location: book-appointment-form.php");
      exit; // Ensure no further code is executed after redirect
  }
  }
function getBookAppointmentForm($array) {
    echo '<form method="POST" action="components\bookAppointment\functions.php">
            <h4>
            '. $array['title'] .'<span>'. $array['titleSpan'] .'</span>
            </h4>
            <div class="form-row">
              <div class="form-group col-lg-4">
                <label for='. $array['formRow1']['formGroup1']['labelFor'] .'>'. $array['formRow1']['formGroup1']['label'] .'</label>
                <input type='. $array['formRow1']['formGroup1']['inputType'] .' name='. $array['formRow1']['formGroup1']['inputName'] .' class='. $array['formRow1']['formGroup1']['inputClass'] .' id='. $array['formRow1']['formGroup1']['inputId'] .' placeholder="'. $array['formRow1']['formGroup1']['inputPlaceholder'] .'">
              </div>
              <div class="form-group col-lg-4">
                <label for='. $array['formRow1']['formGroup2']['labelFor'] .'>'. $array['formRow1']['formGroup2']['label'] .'</label>
                <select name='. $array['formRow1']['formGroup2']['selectName'] .' class='. $array['formRow1']['formGroup2']['selectClass'] .' id='. $array['formRow1']['formGroup2']['selectId'] .'>';
                  foreach ($array['formRow1']['formGroup2']['selectOptions'] as $options => $option) {
                    echo '<option value="' . $option['optionValue'] . '">' . $option['optionTitle'] . '</option>';
                  }
         echo '</select>
              </div>
              <div class="form-group col-lg-4">
                <label for='. $array['formRow1']['formGroup3']['labelFor'] .'>'. $array['formRow1']['formGroup3']['label'] .'</label>
                <select name='. $array['formRow1']['formGroup3']['selectName'] .' class='. $array['formRow1']['formGroup3']['selectClass'] .' id='. $array['formRow1']['formGroup3']['selectId'] .'>';
                  foreach ($array['formRow1']['formGroup3']['selectOptions'] as $options => $option) {
                    echo '<option value="' . $option['optionValue'] . '">' . $option['optionTitle'] . '</option>';
                  }
         echo '</select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-lg-4">
                <label for='. $array['formRow2']['formGroup1']['labelFor'] .'>'. $array['formRow2']['formGroup1']['label'] .'</label>
                <input type='. $array['formRow2']['formGroup1']['inputType'] .' name='. $array['formRow2']['formGroup1']['inputName'] .' class='. $array['formRow2']['formGroup1']['inputClass'] .' id='. $array['formRow2']['formGroup1']['inputId'] .' placeholder='. $array['formRow2']['formGroup1']['inputPlaceholder'] .'>
              </div>
              <div class="form-group col-lg-4">
                <label for='. $array['formRow2']['formGroup2']['labelFor'] .'>'. $array['formRow2']['formGroup2']['label'] .'</label>
                <input type='. $array['formRow2']['formGroup2']['inputType'] .' name='. $array['formRow2']['formGroup2']['inputName'] .' class='. $array['formRow2']['formGroup2']['inputClass'] .' id='. $array['formRow2']['formGroup2']['inputId'] .' placeholder="'. $array['formRow2']['formGroup2']['inputPlaceholder'] .'">
              </div>
              <div class="form-group col-lg-4">
                <label for="'. $array['formRow2']['formGroup3']['labelFor'] .'">'. $array['formRow2']['formGroup3']['label'] .'</label>
                <div class="'. $array['formRow2']['formGroup3']['inputGroupClass'] .'" id="'. $array['formRow2']['formGroup3']['inputGroupId'] .'" data-date-format="'. $array['formRow2']['formGroup3']['inputDateFormat'] .'">
                  <input type="'. $array['formRow2']['formGroup3']['inputGroup']['inputType'] .'" name="'. $array['formRow2']['formGroup3']['inputGroup']['inputName'] .'" class="'. $array['formRow2']['formGroup3']['inputGroup']['inputClass'] .'" readonly>
                  <span class="'. $array['formRow2']['formGroup3']['inputGroup']['inputSpanClass'] .'">
                    <i class="'. $array['formRow2']['formGroup3']['inputGroup']['inputSpan']['iconClass'] .'" aria-hidden="'. $array['formRow2']['formGroup3']['inputGroup']['inputSpan']['aria-hidden'] .'"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class='. $array['buttonBoxClass'] .'>
              <button type='. $array['buttonType'] .' class='. $array['buttonClass'] .'>'. $array['buttonTitle'] .'</button>
            </div>
          </form>';
}







?>