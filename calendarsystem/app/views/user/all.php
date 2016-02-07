{% extends 'templates/default.php' %}

{% block title %}All users{% endblock %}

{% block content %}
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2 class="sub-header">List of registered users</h2>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Full name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Level of auth</th>
            </tr>
          </thead>
					{% if users is empty %}
						<p>No registered users yet.</p>
					{% else %}
						{% for user in users %}
            <tr>
							<td>
								{% if user.getFullName %}
									({{ user.getFullName }})
								{% endif %}
							<td>
								{% if user.getFullName %}
									({{ user.getFullName }})
								{% endif %}
							</td>
							<td>
								<a href="{{ urlFor('user.profile', {username: user.username}) }}">{{ user.username }}</a>
							</td>
							<td>
								{{ user.email }}
							</td>
							<td>
                {% if user.isAdmin %}
                  Administrator (Unlimited)
                {% else %}
                  Normal User (view All Tables)
                {% endif %}
							</td>
            </tr>
						{% endfor %}
					{% endif %}
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{% endblock %}
