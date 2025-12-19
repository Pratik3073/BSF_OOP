<?php
    /*interface Animal{
        public function communicate();
    }

    Class Dog implements Animal
    {
        public function communicate()
        {
            return"bark";
        }
    }

    Class Cat implements Animal
    {
        public function communicate()
        {
            return"meow";
        }
    }*/
?>

<?php /*
    interface Logger
    {
        public function execute($message);
    }

    class LogToFile implements Logger
        {
            public function execute($message)
            {
                var_dump("log the message to a file");
            }
        }

        class LogToDtabase implements Logger
        {
            public function execute($message)
            {
                var_dump("log the message to a database:" . $message);
            }
        }


        class UserController
        {
            protected $logger;
            public function __construct(Logger $logger)
            {
                $this->logger = $logger;
            }

            public function show()
            {
                $user = "Pratik";
                $this->logger->execute($user);
            }
        }

        $controller = new UserController(new LogToDtabase);
        $controller->show();
        */
?>

