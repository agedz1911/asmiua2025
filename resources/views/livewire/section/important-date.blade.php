<div class="flex justify-center">
    <div class="w-full px-4 max-w-4xl">
        <div class="overflow-x-auto">
            <table class="table">
                <tbody>
                    <!-- row 1 -->
                    @foreach ($importantDates as $date)
                    <tr>
                        <td style="width: 50%;">
                            <p class="text-gray-500">{{$date->title}}</p>
                        </td>
                        <td>
                            <p class="text-gray-500"> {{
                            $date->date_end
                            ? \Carbon\Carbon::parse($date->date)->format('d') . ' - ' .
                            \Carbon\Carbon::parse($date->date_end)->format('d F, Y')
                            : \Carbon\Carbon::parse($date->date)->format('d F, Y')
                            }}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>