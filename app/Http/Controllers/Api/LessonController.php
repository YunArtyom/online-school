<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSubjectFormRequest;
use App\Http\Requests\EditGradeFormRequest;
use App\Http\Requests\EditSubjectFormRequest;
use App\Http\Requests\Topic\CreateTopicFormRequest;
use App\Http\Requests\Topic\EditTopicFormRequest;
use App\Http\Resources\Grades\GradeResource;
use App\Http\Resources\Grades\GradesResource;
use App\Http\Resources\Subjects\SubjectsResource;
use App\Http\Resources\Teachers\FreeTeachersForSubjectResource;
use App\Http\Resources\Teachers\TeachersBySubjectResource;
use App\Http\Resources\Topics\TopicResource;
use App\Models\Grade;
use App\Models\Subject;
use App\Models\SubjectTeacher;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


class LessonController extends Controller
{
    //GRADES
    public function grades(): AnonymousResourceCollection
    {
        return GradesResource::collection(Grade::orderBy('grade', 'asc')->get());
    }

    public function grade(Grade $grade): GradeResource
    {
        return new GradeResource($grade);
    }

    public function editGrade(Grade $grade, EditGradeFormRequest $request): GradeResource
    {
        $grade->update($request->validated());

        return new GradeResource($grade);
    }

    public function deactivateActivateGrade(Grade $grade): JsonResponse
    {
        $grade->status = $grade->status === Grade::ACTIVE_STATUS ? Grade::INACTIVE_STATUS : Grade::ACTIVE_STATUS;
        $grade->save();

        return response()->json();
    }

    //SUBJECTS
    public function subject(Subject $subject): SubjectsResource
    {
        return new SubjectsResource($subject);
    }

    public function createSubject(CreateSubjectFormRequest $request): JsonResponse
    {
        Subject::create($request->validated());

        return response()->json(status: 201);
    }

    public function editSubject(Subject $subject, EditSubjectFormRequest $request): SubjectsResource
    {
        $subject->update($request->validated());

        return new SubjectsResource($subject);
    }

    public function deactivateActivateSubject(Subject $subject): JsonResponse
    {
        $subject->status = $subject->status === Grade::ACTIVE_STATUS ? Grade::INACTIVE_STATUS : Grade::ACTIVE_STATUS;
        $subject->save();

        return response()->json();
    }

    public function deleteSubject()
    {
        //
    }

    public function teachersBySubject(Subject $subject): AnonymousResourceCollection
    {
        return TeachersBySubjectResource::collection(SubjectTeacher::where('subject_id', $subject->id)->with('teacher')->get());
    }

    public function listFreeTeachersForSubject(Subject $subject): AnonymousResourceCollection
    {
        $freeTeachers = User::select(['id', 'name'])
            ->where('type', User::TEACHER_TYPE)
            ->whereNotIn('id', SubjectTeacher::where('subject_id', $subject->id)->get()->pluck('teacher_id')->toArray())
            ->get();

        return FreeTeachersForSubjectResource::collection($freeTeachers);
    }

    public function addTeacherToSubject(Subject $subject, User $teacher): JsonResponse
    {
        $isset = SubjectTeacher::where('subject_id', $subject->id)->where('teacher_id', $teacher->id)->first();

        if (!$isset) {
            SubjectTeacher::create(['subject_id' => $subject->id, 'teacher_id' => $teacher->id]);
        }

        return response()->json(status: 201);
    }

    public function removeTeacherFromSubject(Subject $subject, User $teacher): JsonResponse
    {
        SubjectTeacher::where('subject_id', $subject->id)->where('teacher_id', $teacher->id)->delete();

        return response()->json();
    }

    public function createTopic(CreateTopicFormRequest $request): TopicResource
    {
        $topic = Topic::create(['grade_id' => $request->grade_id, 'subject_id' => $request->subject_id,
            'name' => $request->name, 'status' => Topic::INACTIVE_STATUS
        ]);

        return new TopicResource($topic);
    }

    public function editTopic(EditTopicFormRequest $request, Topic $topic): TopicResource
    {
        $topic->update($request->validated());

        return new TopicResource($topic);
    }

    public function deactivateActivateTopic(Topic $topic): JsonResponse
    {
        if ($topic->status === Topic::INACTIVE_STATUS) {
            if (is_null($topic->theory)) {
                $text = 'Теория обязательна перед публикацией!';
            } elseif (is_null($topic->price_usd)) {
                $text = 'Цена в USD обязательна перед публикаций!';
            } elseif (is_null($topic->price_rub)) {
                $text = 'Цена в RUB обязательна перед публикацией!';
            } elseif (is_null($topic->price_won)) {
                $text = 'Цена в WON обязательна перед публикацией!';
            } elseif (is_null($topic->deadline_offset)) {
                $text = 'Срок сдачи ДЗ (в днях) обязательно для заполнения!';
            } elseif (is_null($topic->evaluation_type)) {
                $text = 'Тип оценки обязательно для заполнения';
            } elseif (in_array($topic->evaluation_type, [Topic::EVALUATION_SCORE_TYPE, Topic::EVALUATION_PASS_PERCENTAGE_TYPE])) {
                if(is_null($topic->evaluation_min)) {
                    $text = 'Минимальная оценка обязательна для заполнения';
                } elseif (is_null($topic->evaluation_max)) {
                    $text = 'Максимальная оценка обязательна для заполнения';
                }
            }

            if (isset($text)) {
                return response()->json(['text' => $text]);
            }
        }

        $topic->status = $topic->status === Topic::ACTIVE_STATUS ? Topic::INACTIVE_STATUS : Topic::ACTIVE_STATUS;
        $topic->save();

        return response()->json();
    }

    public function deleteTopic(Topic $topic)
    {
        //
    }

    public function calendarTopics()
    {

    }

    public function addTopicToDay()
    {

    }

    public function day()
    {

    }

    public function editDay()
    {

    }

    public function calendar()
    {

    }
}
