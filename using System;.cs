using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace BrailleConverter
{
    public partial class Default : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void ConvertButton_Click(object sender, EventArgs e)
        {
            string inputText = TextInput.Text;
            string outputText = "";
            Dictionary<char, string> brailleMap = new Dictionary<char, string>()
            {
                {'a', "⠁"}, {'b', "⠃"}, {'c', "⠉"}, {'d', "⠙"}, {'e', "⠑"},
                {'f', "⠋"}, {'g', "⠛"}, {'h', "⠓"}, {'i', "⠊"}, {'j', "⠚"},
                {'k', "⠅"}, {'l', "⠇"}, {'m', "⠍"}, {'n', "⠝"}, {'o', "⠕"},
                {'p', "⠏"}, {'q', "⠟"}, {'r', "⠗"}, {'s', "⠎"}, {'t', "⠞"},
                {'u', "⠥"}, {'v', "⠧"}, {'w', "⠺"}, {'x', "⠭"}, {'y', "⠽"}, {'z', "⠵"}
            };
            inputText = inputText.ToLower();
            foreach (char c in inputText)
            {
                if (brailleMap.ContainsKey(c))
                {
                    outputText += brailleMap[c];
                }
                else
                {
                    outputText += c;
                }
            }
            BrailleOutput.Text = outputText;
        }
    }
}
