<?php
namespace App\Supports;
use App\Models\Blog;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class UpdateSupport
{
    public static function updateSchema()
    {
        try {
            if (!Schema::hasColumn("lessons", "duration")) {
                Schema::table("lessons", function (Blueprint $table) {
                    $table->string("duration")->nullable();
                    $table->string("file")->nullable();
                    $table->string("slug");
                });
                $lessons = Lesson::all();

                foreach ($lessons as $lesson) {
                    $lesson->slug = Str::slug($lesson->name);
                    $lesson->save();
                }
            }
            if (!Schema::hasColumn("lessons", "summary")) {
                Schema::table("lessons", function (Blueprint $table) {
                    $table->text("summary")->nullable();
                });
                //                $lessons = Lesson::all();
                //
                //                foreach ($lessons as $lesson) {
                //                    $lesson->slug = Str::slug($lesson->name);
                //                    $lesson->save();
                //                }
            }
            if (!Schema::hasColumn("courses", "slug")) {
                Schema::table("courses", function (Blueprint $table) {
                    $table->string("slug");
                });

                $courses = Course::all();

                foreach ($courses as $course) {
                    $course->slug = Str::slug($course->name);
                    $course->save();
                }
            }
            if (!Schema::hasColumn("users", "description")) {
                Schema::table("users", function (Blueprint $table) {
                    $table->string("description");
                    $table->string("timezone")->nullable();
                });
            }
            if (!Schema::hasColumn("blogs", "slug")) {
                Schema::table("blogs", function (Blueprint $table) {
                    $table->string("slug");
                });

                $blogs = Blog::all();

                foreach ($blogs as $blog) {
                    $blog->slug = Str::slug($blog->name);
                    $blog->save();
                }
            }
            if (!Schema::hasTable("job_applications")) {
                Schema::create("job_applications", function (Blueprint $table) {
                    $table->id();
                    $table->uuid("uuid");
                    $table->unsignedInteger("student_id")->default(0);

                    $table->unsignedInteger("job_id")->default(0);
                    $table->string("first_name")->nullable();
                    $table->string("last_name")->nullable();
                    $table->string("email")->nullable();
                    $table->string("phone")->nullable();
                    $table->text("description")->nullable();
                    $table->string("cover_letter")->nullable();
                    $table->string("resume")->nullable();
                    $table->timestamps();
                });
            }

            if (!Schema::hasTable("product_categories")) {
                Schema::create("product_categories", function (
                    Blueprint $table
                ) {
                    $table->id();
                    $table->string("name");
                    $table->string("slug")->nullable();
                    $table->unsignedSmallInteger("sort_order")->default(0);
                    $table->text("description")->nullable();
                    $table->timestamps();
                });
            }

            if (!Schema::hasColumn("users", "uuid")) {
                Schema::table("users", function (Blueprint $table) {
                    $table
                        ->uuid("uuid")
                        ->after("id")
                        ->nullable();
                });

                $users = User::all();
                foreach ($users as $user) {
                    $user->uuid = Str::uuid();
                    $user->save();
                }
            }

            if (!Schema::hasColumn("lessons", "youtube_video")) {
                Schema::table("lessons", function (Blueprint $table) {
                    $table->string("youtube_video")->nullable();
                    $table->string("vimeo_video")->nullable();
                });
            }
            if (!Schema::hasTable("cookie_policies")) {
                Schema::create("cookie_policies", function (Blueprint $table) {
                    $table->id();
                    $table->unsignedInteger("admin_id")->default(0);
                    $table->string("title")->nullable();
                    $table->date("date")->nullable();
                    $table->text("description")->nullable();
                    $table->timestamps();
                });
            }

            if (!Schema::hasColumn("students", "uuid")) {
                Schema::table("students", function (Blueprint $table) {
                    $table
                        ->uuid("uuid")
                        ->after("id")
                        ->nullable();
                });

                $students = Student::all();
                foreach ($students as $student) {
                    $student->uuid = Str::uuid();
                    $student->save();
                }
            }
        } catch (\Exception $e) {
            ray($e->getMessage());
            return false;
        }
    }
}
