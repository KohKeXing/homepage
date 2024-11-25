<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $dateOfBirth = $_POST['dateOfBirth'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $country = $_POST['country'] ?? '';
    $address = $_POST['address'] ?? '';
    $homeType = $_POST['homeType'] ?? '';

    if (empty($name) || empty($email) || empty($dateOfBirth) || empty($gender) || empty($country) || empty($address) || empty($homeType)) {
        echo json_encode(['success' => false, 'message' => 'Please fill in all required fields.']);
        exit;
    }

    $to = $email;
    $subject = "Your Personalized Feng Shui Report";
    $message = "
    Dear $name,

    Thank you for requesting a Feng Shui report. Based on the information you provided, here are some general Feng Shui tips:

    1. Ensure your main door is free from obstructions to allow positive energy to flow into your home.
    2. Keep your living spaces clutter-free to promote good energy circulation.
    3. Use colors that align with your birth element to enhance your personal energy.
    4. Position your bed, desk, and stove in commanding positions for better luck and prosperity.
    5. Incorporate natural elements like plants and water features to balance the energy in your space.

    We hope these tips help improve the Feng Shui in your $homeType. For more personalized advice, please consult with a Feng Shui expert.

    Best regards,
    The Feng Shui Team
    ";

    $headers = "From: noreply@fengshui.example.com\r\n";
    $headers .= "Reply-To: support@fengshui.example.com\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    $emailSent = true; // In a real application, use: mail($to, $subject, $message, $headers);

    if ($emailSent) {
        echo json_encode(['success' => true, 'message' => 'Report sent successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to send the report. Please try again later.']);
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Feng Shui Report</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/footer.css" rel="stylesheet">
    <script src="path/to/navigationbar.js" defer></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 100%;
            max-width: 600px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .card-header {
            background-color: #4a4a4a;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .card-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }
        .card-header p {
            margin: 10px 0 0;
            font-size: 16px;
            opacity: 0.8;
        }
        .card-content {
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select,
        textarea {
            width: 98%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        select:focus,
        textarea:focus {
            border-color: #4a4a4a;
            outline: none;
        }
        .radio-group {
            display: flex;
            gap: 20px;
        }
        .radio-group label {
            font-weight: normal;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .radio-group input[type="radio"] {
            margin-right: 5px;
        }
        small {
            display: block;
            margin-top: 5px;
            color: #666;
            font-style: italic;
        }
        .country-select-container {
            position: relative;
        }
        
        .country-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .country-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            max-height: 200px;
            overflow-y: auto;
            background: white;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 4px 4px;
            z-index: 1000;
            display: none;
        }
        
        .country-option {
            padding: 8px 10px;
            cursor: pointer;
        }
        
        .country-option:hover {
            background-color: #f0f0f0;
        }
        
        .country-option.selected {
            background-color: #e6e6e6;
        }
        
        button {
            background-color: #166534;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #333;
        }
        .thank-you {
            text-align: center;
        }
        .error {
            border-color: #ff4136 !important;
        }
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            .card-header {
                padding: 15px;
            }
            .card-header h1 {
                font-size: 20px;
            }
            .card-header p {
                font-size: 14px;
            }
            .card-content {
                padding: 15px;
            }
            button {
                padding: 10px 15px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    

    <div class="container">
        <div class="card" id="formCard">
            <div class="card-header">
                <h1>Free Feng Shui Report</h1>
                <p>Fill in your details to receive a personalized Feng Shui report.</p>
            </div>
            <div class="card-content">
                <form id="fengShuiForm" method="POST">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="dateOfBirth">Date of Birth</label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth" required>
                        <small>This helps us calculate your personal Feng Shui elements.</small>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio-group">
                            <label>
                                <input type="radio" name="gender" value="male" required> Male
                            </label>
                            <label>
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                            <label>
                                <input type="radio" name="gender" value="other"> Other
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <div class="country-select-container">
                            <input type="text" id="country" name="country" class="country-input" autocomplete="off" placeholder="Selecr or type your country" required>
                            <div id="countryDropdown" class="country-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Full Address</label>
                        <textarea id="address" name="address" required></textarea>
                        <small>This helps us understand your living environment.</small>
                    </div>
                    <div class="form-group">
                        <label for="homeType">Home Type</label>
                        <select id="homeType" name="homeType" required>
                            <option value="">Select your home type</option>
                            <option value="apartment">Apartment</option>
                            <option value="house">House</option>
                            <option value="studio">Studio</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit">Get Your Free Feng Shui Report</button>
                </form>
            </div>
        </div>
        <div id="thankYouMessage" class="card thank-you" style="display: none;">
            <div class="card-header">
                <h2>Thank You!</h2>
                <p>Your Feng Shui report request has been submitted.</p>
            </div>
            <div class="card-content">
                <p>We will process your information and send the free report to your email soon.</p>
                <p>Please check your inbox (and spam folder) for your personalized Feng Shui insights.</p>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('fengShuiForm');
            const formCard = document.getElementById('formCard');
            const thankYouMessage = document.getElementById('thankYouMessage');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                if (validateForm()) {
                    const formData = new FormData(form);

                    fetch(window.location.href, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            formCard.style.display = 'none';
                            thankYouMessage.style.display = 'block';
                        } else {
                            alert('There was an error submitting the form. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error submitting the form. Please try again.');
                    });
                }
            });

            function validateForm() {
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('error');
                    } else {
                        field.classList.remove('error');
                    }
                });

                if (!isValid) {
                    alert('Please fill in all required fields.');
                }

                return isValid;
            }
        });
        
         document.addEventListener('DOMContentLoaded', function() {
            const countries = [
                "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan",
                "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina",
                "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic",
                "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia",
                "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
                "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan",
                "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho",
                "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique",
                "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Palau",
                "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis",
                "Saint Lucia", "Saint Vincent", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland",
                "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu",
                "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
            ];

            const countryInput = document.getElementById('country');
            const countryDropdown = document.getElementById('countryDropdown');

            function showDropdown() {
                countryDropdown.style.display = 'block';
            }

            function hideDropdown() {
                // Small delay to allow click events to register
                setTimeout(() => {
                    countryDropdown.style.display = 'none';
                }, 200);
            }

            function filterCountries(searchText) {
                const filtered = countries.filter(country => 
                    country.toLowerCase().includes(searchText.toLowerCase())
                );
                
                countryDropdown.innerHTML = '';
                filtered.forEach(country => {
                    const option = document.createElement('div');
                    option.className = 'country-option';
                    option.textContent = country;
                    option.onclick = () => {
                        countryInput.value = country;
                        hideDropdown();
                    };
                    countryDropdown.appendChild(option);
                });

                if (filtered.length > 0) {
                    showDropdown();
                } else {
                    hideDropdown();
                }
            }

            // Event listeners
            countryInput.addEventListener('focus', () => {
                filterCountries(countryInput.value);
            });

            countryInput.addEventListener('input', (e) => {
                filterCountries(e.target.value);
            });

            countryInput.addEventListener('blur', hideDropdown);

            // Close dropdown when clicking outside
            document.addEventListener('click', (e) => {
                if (!countryInput.contains(e.target) && !countryDropdown.contains(e.target)) {
                    hideDropdown();
                }
            });
        });
    </script>
</body>
</html>