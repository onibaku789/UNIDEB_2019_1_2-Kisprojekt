<?php
class Package {
	static $classes = array(
		'Abstract_Page' => 'abstracts/abstract_page.php',
		'Abstract_Template' => 'abstracts/abstract_template.php',
		'Login_Page' => 'components/authentication/login_page.php',
		'Authentication' => 'components/authentication/model/authentication.php',
		'Register_Page' => 'components/authentication/register_page.php',
		'Launcher' => 'components/core/launcher.php',
		'Create_Quiz_Page' => 'components/quiz/create_quiz_page.php',
		'Answer' => 'components/quiz/models/answer.php',
		'Quiz' => 'components/quiz/models/quiz.php',
		'QuizManager' => 'components/quiz/models/quizmanager.php',
		'Leaderboard_Page' => 'components/quiz/quiz_leaderboard_page.php',
		'Quiz_List_Page' => 'components/quiz/quiz_list_page.php',
		'Quiz_Page' => 'components/quiz/quiz_page.php',
		'Main_Page' => 'components/site/main_page.php',
		'Template' => 'components/site/template.php',
		'Create_Team_Page' => 'components/team/create_team_page.php',
		'Team' => 'components/team/models/team.php',
		'TeamManager' => 'components/team/models/team_manager.php',
		'Team_Page' => 'components/team/team_page.php',
		'User' => 'components/user/models/user.php',
		'Autoload' => 'globals/autoload.php',
		'Database' => 'globals/database.php'  );
}