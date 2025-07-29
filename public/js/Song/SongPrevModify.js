const $songoutput = document.getElementById("structure");
const $outputvalue = document.getElementById("output_value");

$songoutput.addEventListener("input", () => {
    const $songoutput = document.getElementById("structure");
    const $outputvalue = document.getElementById("output_value");

    $outputvalue.value = $songoutput.innerHTML;
});
