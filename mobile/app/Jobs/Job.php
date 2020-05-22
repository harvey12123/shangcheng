<?php

namespace App\Jobs;

abstract class Job implements \Illuminate\Contracts\Queue\ShouldQueue
{
	use \Illuminate\Queue\InteractsWithQueue;
	use \Illuminate\Bus\Queueable;
	use \Illuminate\Queue\SerializesModels;
}

?>
