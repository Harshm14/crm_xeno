<link rel="icon" type="image/png" href="https://webdamn.com/wp-content/themes/v2/webdamn.png">
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="" class="navbar-brand">CRM</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.webdamn.com">Home</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
	<!-- Chatbot UI -->
<div id="chatbot-container">
  <div id="chatbot-header">💬 Chat Support</div>
  <div id="chatbot-messages"></div>
  <input type="text" id="chatbot-input" placeholder="Type a message..." />
</div>

<style>
  #chatbot-container {
    position: fixed;
    right: 20px;
    bottom: 0;
    width: 300px;
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 12px 12px 0 0;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    font-family: sans-serif;
    z-index: 999;
  }

  #chatbot-header {
    background: #007bff;
    color: white;
    padding: 10px;
    font-weight: bold;
    border-radius: 12px 12px 0 0;
  }

  #chatbot-messages {
    height: 200px;
    overflow-y: auto;
    padding: 10px;
    font-size: 14px;
  }

  #chatbot-input {
    width: 100%;
    border: none;
    border-top: 1px solid #ccc;
    padding: 10px;
    box-sizing: border-box;
    font-size: 14px;
  }

  #chatbot-input:focus {
    outline: none;
  }
</style>
<script>
  const input = document.getElementById('chatbot-input');
  const messages = document.getElementById('chatbot-messages');

  input.addEventListener('keypress', function (e) {
    if (e.key === 'Enter' && input.value.trim() !== '') {
      const userMessage = input.value;
      appendMessage('You', userMessage);
      respondTo(userMessage);
      input.value = '';
    }
  });

  function appendMessage(sender, text) {
    const msg = document.createElement('div');
    msg.innerHTML = `<strong>${sender}:</strong> ${text}`;
    messages.appendChild(msg);
    messages.scrollTop = messages.scrollHeight;
  }

  function respondTo(message) {
    const msg = message.toLowerCase();
    let response = "I'm not sure how to help with that. Try asking about customers, invoices, or login issues.";

    if (msg.includes("hello") || msg.includes("hi")) {
      response = "Hello! How can I assist you with your CRM tasks today?";
    } else if (msg.includes("customer") || msg.includes("clients")) {
      response = "To manage customers, go to the Customers tab in the navigation menu.";
    } else if (msg.includes("invoice") || msg.includes("billing")) {
      response = "You can create or view invoices from the Invoices section in your dashboard.";
    } else if (msg.includes("login") || msg.includes("password")) {
      response = "If you're having login issues, please ensure your username and password are correct. Still stuck? Ask your admin.";
    } else if (msg.includes("account") || msg.includes("profile")) {
      response = "Account settings can be updated by clicking your name at the top right corner.";
    } else if (msg.includes("support") || msg.includes("help")) {
      response = "For support, you can contact the admin or check the documentation section.";
    } else if (msg.includes("dashboard") || msg.includes("home")) {
      response = "The dashboard shows recent activities, stats, and quick actions for your CRM system.";
    }

    setTimeout(() => appendMessage('Bot', response), 400);
  }
  fetch("https://api.openai.com/v1/chat/completions", {
  method: "POST",
  headers: {
    "Content-Type": "application/json",
    "Authorization": "Bearersk-proj-74wPmUJMW40jWL8y-Yt_bQcrqswRx31SuBvUMh1K9xrpNAUYD-Wcw_RRYqk7lqREROHXpSDWhZT3BlbkFJq4ctOV3Xw8myepzeNRTh_vEqRxRRm3YYjzOy8Oi6zROp_v1sym-Xg1Ja16PpfNkE1GVuflnR0A"
  },
  body: JSON.stringify({
    model: "gpt-3.5-turbo",
    messages: [{ role: "user", content: "Hello, what can you do?" }]
  })
})
.then(res => res.json())
.then(data => console.log(data.choices[0].message.content));
</script>

